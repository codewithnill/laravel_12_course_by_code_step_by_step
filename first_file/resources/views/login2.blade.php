@extends('layout2')

@section('title', 'Login Page')


@section('main')
    <div class="main">
        <h1>User login</h1>
        <form action="" method="get">
            <input> type="text" placeholder="Enter name"><br><br>
            <input type="text" placeholder="Enter password"><br><br>
            <button type="submit">Login</button>
        </form>
    </div>
@endsection