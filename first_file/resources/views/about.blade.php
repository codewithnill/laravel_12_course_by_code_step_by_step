@include('common.header') 

<h1>About</h1>

<!-- double braces cause it is a blade.php -->
<!-- <h1>{{ $user }}</h1> -->
<h1>User name is {{$user}}</h1>
<!-- calling from UserController.php, return view('about',['user'=>$name]); -->