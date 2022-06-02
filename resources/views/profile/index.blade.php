@extends('layouts.app')
@section('content')
    <div class="container">
        <nav class="nav nav-pills flex-column flex-sm-row my-3">
            <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="{{route('profile.index')}}">Profile</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="{{route('updateUser')}}">User Edit</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="{{route('updatePassword')}}">Password Edit</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="{{route('chanageImage')}}">Image Edit</a>
        </nav>
        <div id ="profile" class="row bg-white p-3 shadow-sm ">
            {{-- Imag  user --}}
            <div class="img-dash">
                <img src="{{asset('storage/images/'.$user->image)}}" alt="">
            </div>
            {{-- User Name  --}}
            <p class="text-center shadow-sm p-2 my-2"> Name : {{$user->name}}</p>
            <p class="text-center shadow-sm  p-2 my-2"> Email : {{$user->email}}</p>
            {{-- link to receive messages --}}
            <p class="text-center shadow-sm p-2 my-2 url">http://sarahaa.dev.com/message/{{$user->name}}/{{$user->id}}</p>
            {{-- Button controll to shara link  --}}
            
            <div class="share text-center">
                <button class="copy"><i class="fa-solid fa-copy"></i></button>
                <a  href="https://www.facebook.com/share.php?u=http://sarahaa.dev.com/message/{{$user->name}}/{{$user->id}}" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a  href="https://www.instagram.com/?url=http://sarahaa.dev.com/message/{{$user->name}}/{{$user->id}}" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a  href="https://twitter.com/intent/tweet?url=http://sarahaa.dev.com/message/{{$user->name}}/{{$user->id}}" target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                
            </div>
        </div>          
    </div>
@endsection