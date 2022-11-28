@extends('login.main')


@section('title')
<title>LOGIN</title>
@endsection


@section('content')
    <!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
            <meta name="generator" content="Hugo 0.98.0">
            

            <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
            <link rel="stylesheet" href="/css/login.css">

            

            

        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

            <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }

            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }
            body, html {
            height: 100%;
            }

            .bg {
            /* The image used */
            background-image: url("image/logo3.jpg");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }

            </style>

            
            <!-- Custom styles for this template -->
            <link href="signin.css" rel="stylesheet">
        </head>
        <body class="text-center bg">
            <img class="mb-5 " src="/image/logo.png" alt="" width="600" height="250">
        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
            
        <main class="form-signin w-100 m-auto mt-5" style="position: relative; top: -100px;">

            <form action="/login" method="post">
                @csrf

                

                <h1 class="h3 mb-3 fw-normal"><Label>Login</Label></h1>

                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="floatingInput" placeholder="31119000" autofocus required>
                    <label for="floatingInput">Username</label>
                </div>
                
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>


                <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            </form>
        </main>


            
        </body>
    </html>
@endsection