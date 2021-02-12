<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- meta properties -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Romina Trazzi">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <!-- / meta properties -->
        
        <title>Laravel | La Molisana | @yield('title') </title>
        
        <!-- Google Fonts + FontAwesome + CSS stylesheet -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" >
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- / Google Fonts + FontAwesome + CSS stylesheet -->

    </head>
    

    <body>

        @include('layout.header')
    
        @yield('main')

    </body>

        


</html>


    






