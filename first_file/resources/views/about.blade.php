@include('common.header') 
@include('common.inner',['page'=>"this is about page"])

<!-- checking if sub view exists -->
{{-- @include('common.common',['page'=>"this is about page"])
error message : View [common.common] not found. --}}

@includeIf('common.common',['page'=>"this is about page"])
<!-- load if exists, if not exists, do nothing -->

<x-message-banner msg="about user msg" class="success"/>
<x-message-banner msg="went something wrong" class="warning"/>
<style>
.success{
    color: green;
    background-color: lightgreen;
    padding: 3px 10px;
    border-radius: 2px;
    display: inline-block;
    margin: 10px;
}

.error{
    color: red;
    background-color: lightcoral;
    padding: 3px 10px;
    border-radius: 2px;
    display: inline-block;
    margin: 10px;
}

.warning{
    color: orange;
    background-color: lightyellow;
    padding: 3px 10px;
    border-radius: 2px;
    display: inline-block;
    margin: 10px;
}
</style>

<h1>About</h1>

{{-- double braces cause it is a blade.php --}}
{{-- <h1>{{ $user }}</h1> --}}
<h1>User name is {{$user}}</h1>
<!-- calling from UserController.php, return view('about',['user'=>$name]); -->