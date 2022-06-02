@extends('layouts.app')
@section('content')
<div class="container">
    <nav class="nav nav-pills flex-column flex-sm-row my-3">
        <a class="flex-sm-fill text-sm-center nav-link" aria-current="page" href="{{route('profile.index')}}">Profile</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="{{route('updateUser')}}">User Edit</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="{{route('updatePassword')}}">Password Edit</a>
        <a class="flex-sm-fill text-sm-center nav-link active" href="{{route('chanageImage')}}">Image Edit</a>
    </nav>
    <div class="bg-white p-3">
        <div class="img-dash">
            <img src="{{asset('storage/images/'.$user->image)}}" alt="">
        </div>
        <form  action="{{route('profile.image')}}" method="POST" enctype ="multipart/form-data">
            @csrf
            <input class="form-control my-2" type="file" name="image" >
            <input class="btn btn-success my-2" type="submit" value="change" style="display: block;width: 100%;">
        </form>
    </div>    
</div>
@endsection