@extends('layouts.app')
@section('content')
    <div class="container">
        <nav class="nav nav-pills flex-column flex-sm-row my-3">
            <a class="flex-sm-fill text-sm-center nav-link " aria-current="page" href="{{route('profile.index')}}">Profile</a>
            <a class="flex-sm-fill text-sm-center nav-link " href="{{route('updateUser')}}">User Edit</a>
            <a class="flex-sm-fill text-sm-center nav-link active" href="{{route('updatePassword')}}">Password Edit</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="{{route('chanageImage')}}">Image Edit</a>
        </nav>
    <form class="bg-white p-3" action="{{route('profile.upadate.password')}}" method="POST">
        @csrf
        <div class="my-2">
            <label for="">password</label>
            <input class="form-control" type="password" name="password">
        </div>
        <div class="my-2">
            <label for="">confirm password</label>
            <input class="form-control" type="password" name="password2">
        </div>
        <div class="my-2">
            <input class="btn btn-primary" type="submit" value="Save" style="display: block;width: 100%;">
        </div>
    </form>    
@endsection