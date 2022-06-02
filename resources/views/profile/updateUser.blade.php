@extends('layouts.app')
@section('content')
<div class="container">
    <nav class="nav nav-pills flex-column flex-sm-row my-3">
        <a class="flex-sm-fill text-sm-center nav-link " aria-current="page" href="{{route('profile.index')}}">Profile</a>
        <a class="flex-sm-fill text-sm-center nav-link active" href="{{route('updateUser')}}">User Edit</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="{{route('updatePassword')}}">Password Edit</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="{{route('chanageImage')}}">Image Edit</a>
    </nav>
    <form class="bg-white p-3" action="{{route('profile.update')}}" method="POST">
        @csrf
        <div class="my-2">
            <label for="">User Name</label>
            <input class="form-control" type="text" name="user" id="" value="{{$user->name}}">
        </div>
        <div class="my-2">
            <label for="">Email</label>
            <input class="form-control" type="text" name="email" id="" value="{{$user->email}}">
        </div>
        <div class="my-2">
            <input class="btn btn-primary" type="submit" value="Save" style="display: block;width: 100%;">
        </div>
    </form>
</div>
@endsection