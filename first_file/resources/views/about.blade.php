@include('common.header') 
@include('common.inner',['page'=>"this is about page"])

<!-- checking if sub view exists -->
{{-- @include('common.common',['page'=>"this is about page"])
error message : View [common.common] not found. --}}

<h1>About</h1>

<!-- double braces cause it is a blade.php -->
<!-- <h1>{{ $user }}</h1> -->
<h1>User name is {{$user}}</h1>
<!-- calling from UserController.php, return view('about',['user'=>$name]); -->