@include('common.header') <!-- this is how we include the header file in the home page.  -->
@include('common.inner',['page'=>"this is homepage"]) <!--  We can also pass data to the included file by writing it as an array. In this case, we are passing the page variable with the value "this is homepage" to the inner file. -->


<h1>Home page no blade</h1>
<a href="/">Welcome {{$name}}</a>
<a href="/about/nbnill">About page</a>
<h1>{{rand()}}</h1>


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