<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  

use App\Models\message;
use App\Models\User;

class messageController extends Controller
{


        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id =auth()->user()->id;
        $message = message::all()->where('message_to', $id );
        $user = User::find($id);
        return view('pages.dashboard')->with([
            "messages" => $message,
            "user" => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = User::find($id);
        if($user && $user->id !== auth()->user()->id){
            return view('message.create')->with('user', $user);
        }else{
            return  redirect('/message')->with('error', 'This link is valiad');
        }
       
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'message' =>'required'
        ]);
        $message = new message ();
        $message->message = $request->input('message');
        $message->message_to = $request->input('id');
        $message->sender = auth()->user()->id;
        $message->save();
        return  redirect('/message')->with('success', 'message is Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

}
