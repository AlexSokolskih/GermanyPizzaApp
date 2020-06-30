<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    </head>
    <body>
    <style>
        .background-purple {
            background-color: #5C1582;
        }
        .logo-wrapper {
            height: 100%;
            object-fit: cover;
        }
        .css-adaptive {
            display: block;
            max-height: 100%;
            width: auto;
        }

        nav i.cart-icon{
            display: inline-block;
        }
        nav .counter-pizza{
            vertical-align: top;
            font-size: large;
        }

        .card .price{
            font-size: x-large;
            float: right
        }
        .cart .count{
            float: right;
            font-size: x-large;
        }
    </style>
    <div id="app">
        <main-component></main-component>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
