@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger container">
        <button style="float: right" onClick="this.parentNode.parentNode.removeChild(this.parentNode);" type="button" class="btn-close"  aria-label="Close"></button>
        {{$error}}
    </div>
        
    @endforeach
@endif
@if (session('success'))
    <div class="alert alert-success container ">
        <button style="float: right" onClick="this.parentNode.parentNode.removeChild(this.parentNode);" type="button" class="btn-close"  aria-label="Close"></button>

        {{session('success')}}
    </div>
@endif
@if (session('error'))
    <div  class="alert alert-danger container">
        <button style="float: right" onClick="this.parentNode.parentNode.removeChild(this.parentNode);" type="button" class="btn-close"  aria-label="Close"></button>
        {{session('error')}}
    </div>
@endif