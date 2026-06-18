@include('common.header') <!-- this is how we include the header file in the home page.  -->
@include('common.inner',['page'=>"this is homepage"]) <!--  We can also pass data to the included file by writing it as an array. In this case, we are passing the page variable with the value "this is homepage" to the inner file. -->


<h1>Home page no blade</h1>
<a href="/">Welcome {{$name}}</a>
<a href="/about/nbnill">About page</a>
<h1>{{rand()}}</h1>


<x-message-banner class="success" msg="user login successful"/> <!-- this is how we include the message-banner component in the home page.  --> 
<x-message-banner class="success" msg="user signup successful"/> <!-- we can also pass data to the component by writing it as an attribute. In this case, we are passing the msg variable with the value "user signup successful" to the message-banner component.  -->

<x-message-banner class="error" msg="password not correct please try again"/> 
<x-message-banner class="warning" msg="password not correct please try again"/> 



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
    


{{-- <h1>{{$users}}</h1> --}}
{{-- this gives error --}}

{{-- <h1>{{$users[0]}}</h1> --}}

@if($name == 'NB Nill')
    <h1>this is nill</h1>
@elseif($name == 'john')
    <h1>this is john</h1>
@else
    <h1>other user</h1>
@endif


<div>
    @foreach($users as $user)
        <h1>{{$user}}</h1>
    @endforeach
</div>


<div>
    @for($i=0;$i<10;$i++)
        <h1>{{$i}}</h1>
    @endfor
</div>