<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{'/assets/css/slide_bar.css'}}">

    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .img-fluid {
            float: left;
            line-height: .8;
            margin-left: .8rem;
            margin-right: .8rem;
            margin-top: 3px;
            max-height: 33px;
            width: auto;
        }

        .nav-link{
            margin-left: 3.2rem;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            height: 100%;
            text-decoration: none;
            font-family: League Spartan;
            letter-spacing: 1.9px;
            max-width: fit-content;
            text-align: left;
            color: #000000;
            text-transform: uppercase;
            opacity: 1;

        }

        .nav-link:hover{
            border-radius: 50%;
            background: transparent linear-gradient(119deg, #32B5FF 0%, #1EDFE8 100%) 0% 0% no-repeat padding-box;
            opacity: 1;
            background-position: top 90% left 50%;
            background-size: 6px 6px;
        }

        .navbar{
            padding: 1rem 1rem;
        }

        .btn-sessions{
            padding: 1em 1.5em;
            margin: 0px 4px;
            font-family: Raleway;
            font-size: 0.75em;
            letter-spacing: 0.15em;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            border-radius: 9999px;
            background-color: #000000;
            color: #FFFFFF;
            transition: all 0.45s ease 0s;
        }

        .btn-sessions:hover{
            color: #000000;
            background-color: #1edfe8;
        }

        .search-icon{
            position: absolute;
            padding: 10px;
            pointer-events: none;
        }

        .search{
            padding-left: 30px!important;
            margin-right: 3.5em;
            align-content: end;
            border-radius: 25px;
        }

        .search::placeholder {
            text-align: right;
            font-size: 0.9em;
        }

        .principal{
            background-image: url( {{'/assets/img/background-landing.svg' }}) ;
            background-size: cover;
            min-height: 75vh;
            overflow: hidden;
            position: relative;
            width: 100%;
            z-index: 1;
        }

        .content-center{
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 3;
            transform: translate(-50%,-50%);
            text-align: left;
            color: #000000;
            width: 100%;
        }

        .content-center h1{
            font-family: League Spartan;
            color: #111223;
            opacity: 1;
        }

        .content-center h3{
            font-family: League Spartan;
            letter-spacing: 0px;
            color: #111223;
            opacity: 1;
        }

        .icons_home{

        }

        .h5_home{
            font-family: League Spartan;
            text-align: left;
            letter-spacing: 1px;
            color: #1EDFE8;
            text-transform: uppercase;
            opacity: 1;
        }

        .tags-home{
            height: 60px;
            background: #111223 0% 0% no-repeat padding-box;
            opacity: 1;
        }

        .tags-home_hover:hover{
            color: #FFFFFF;
            background-color: #1edfe8;
        }

        .footer-top{
            background-image: url( {{'/assets/img/footer.svg' }}) ;
            background-size: cover;
            min-height: 50vh;
            overflow: hidden;
            position: relative;
            width: 100%;
            z-index: 1;
        }

        .copyright{
            color: #FFFFFF;
            text-align: center;
            padding: 5px;
        }


        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <img class="img-fluid" src="/assets/img/logo.png" alt="">
                <li class="nav-item">
                    <a class="nav-link" onclick="location.href='/portfolio_creator'">Portfolio Creator</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <div class="form-group">
                    <i class="bi bi-search search-icon"></i>
                    <input class="form-control search" type="search" placeholder="Stock or Company Name">
                </div>
            </form>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <button type="button" class="btn btn-sessions" onclick="location.href='/home'">Home</button>
                    @else
                        @if (Route::has('register'))
                            <button type="button" class="btn btn-sessions" onclick="location.href='register'">Registrarse</button>
                        @endif

                        <button type="button" class="btn btn-sessions" onclick="location.href='login'">Ingresar</button>

                    @endauth
                </div>
            @endif
        </div>
    </nav>



    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

</head>

<body>
