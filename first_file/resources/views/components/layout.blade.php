<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
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

        li{
            display: inline;
        }

        li a{
            text-decoration: none;
        }
        
    </style>
</head>
<body>
    <div>
        <div class="header">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Login</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>

        <div class="main">
            {{$main}}
        </div>
    </div>

    <div class="footer">
        <p>Copyright &copy; 2024</p>

    </div>
    
</body>
</html>