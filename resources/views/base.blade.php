<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Page')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fcd2cd;
        }
        
        a {
            text-decoration: none;
            color: white;
            padding:0 10px;
        }

        a:hover {
            color: #fed1dd;
        }

        h1 {
            text-align: center;
            padding-top: 50px;
            font-size: 2.5rem;
            color: #891836;
        }

        p{
            text-align: center;
        }
        img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius:5%;
            width: 20rem;
        }
        nav {
            text-align: center;
            padding: 20px 0;
            background-color: #b25d75;
            font-size: 1.5rem;
            font-weight:bold;
        }
        button{
            background-color:#b25d75;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius:5%;
            padding:15px;
            font-size:2rem;
            margin-bottom:20px;
            color:white;
            border:0;
        }
        button:hover{
            background-color:#891836;
            cursor: pointer;
        }
    </style>
    </head>
</head>
<body>

    <nav>
        <a href="{{ route('home') }}">Home</a> | 
        <a href="{{ route('about') }}">About</a> | 
        <a href="{{ route('contact') }}">Contacts</a> | 
        <a href="{{ route('shop') }}">Shop</a> | 
        <a href="{{ route('cart') }}">Cart</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>