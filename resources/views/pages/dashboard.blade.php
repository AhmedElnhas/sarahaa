@extends('layouts.app')
@section('content')
    <div class="container">
        {{-- Imag  user --}}
        <div class="img-dash">
            <img src="{{asset('storage/images/'.$user->image)}}" alt="">
        </div>
        {{-- User Name 
        <h3 class="text-center"> {{$user->name}}</h3> --}}
        {{-- link to receive messages --}}
        <p class="text-center shadow-sm my-2 p-2 url">http://sarahaa.dev.com/message/{{$user->name}} /{{$user->id}}</p>
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
        {{-- title of message --}}
        <h4 class="text-center my-3">Message</h4>
        {{-- box of messages  --}}
        <div class="messages">
            @if(count($messages) > 0)
                @foreach ($messages as $msg)
                    {{-- message --}}
                    <div class="my-2">
                        <p class="text-center"> {{$msg->message}}</p>
                        <small>{{$msg->created_at}}</small>
                    </div>
                @endforeach
                
            @else
            <div class="text-center">
                No Messages
            </div>   
            @endif

        </div>
    </div>
    @include('inc.footer')
    <script>
        const copy = document.querySelector('.copy'),
        textCopy = document.querySelector(".url");
        copy.addEventListener('click' , ()=>{
            navigator.clipboard.textCopy("textCopy.innerHTML");
        })
    </script>
@endsection
