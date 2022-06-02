@extends('layouts.app')
@section('content')
<div class="container">
    <h2 class="text-center my-3"> Drop Message To {{$user->name}}</h2>
    <form action="{{route('message.store')}}" method="post">
        @csrf
        <textarea name="message" class="form-control" placeholder="Drop Your Message" rows="15"></textarea>
        <input type="hidden" name="id" value="{{$user->id}}">
        <input  class="btn btn-primary my-3 px-5 py-2" type="submit" value="Send">
    </form>
</div>
    
@endsection