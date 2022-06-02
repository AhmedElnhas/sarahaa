<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class profileController extends Controller
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
    use ConfirmsPasswords;
    public function index(){
        $id = auth()->user()->id;
        $user = User::find($id);
        return view('profile.index')->with('user' , $user);
    }
    public function updateuser(Request $request){
        $id = auth()->user()->id;
        $user = User::find($id);
        if($user->name !== $request->input('user') || $user->email !== $request->input('email')){
            $user->name = $request->input('user');
            $user->email = $request->input('email');
            $user->save();
            return redirect('updateUser')->with('success' , "userName or Email  is updated");
        }
        return redirect('updateUser')->with('error' , "userName or Email Is Not  updated");
    }
    public function updatepassword(Request $request){
        $id  = auth()->user()->id;
        $user = User::find($id);
        if($request->input('password') !== $request->input('password2')){
            return redirect('updatePassword')->with('error' , "Password Not Match");
        }else{
         $user->password = Hash::make($request->input('password'));
         return redirect('profile')->with('success' , "Passowrd Is Chanaged");
        }
    }
    public function uploadeImage(Request $request){
        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getclientOriginalName();
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStory = $fileName .'_'.time().'.'.$extension;
            $paht = $request->file('image')->storeAs('public/images' ,$fileNameToStory);    
        }else{
            $fileNameToStory = 'noImage.jpg';
        }
        $id = auth()->user()->id;
        $user = User::find($id);
        $user->image = $fileNameToStory ;
        $user->save();
        return redirect('chanageImage')->with('success' , "Image Is Chanaged");
    }

}
