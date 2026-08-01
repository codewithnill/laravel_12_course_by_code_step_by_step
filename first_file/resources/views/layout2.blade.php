<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        .footer p{
            position: absolute;
            bottom: 0;
            background-color: skyblue;
            width: 100%;
            padding: 10px;
            margin: 0;
            text-align: center;
        }

        .main{
            margin-top:100px;
            text-align: center;
        }

        h1{
            color: green;
        }
    </style>
</head>
<body>
    <div>
        <ul>
            <li>
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Contact</a>
            </li>
        </ul>
    </div>

    <div>
        @section('main')
        @show
    </div>

    <div class="footer">
        <p>Footer</p>
    </div>

</body>
</html>