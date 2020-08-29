<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Service Store</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Link de Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
       
        <script src="https://kit.fontawesome.com/b91f129f33.js" crossorigin="anonymous"></script>
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                height: 100vh;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 25px;
            }
            .links > a {
                color: white; /* #636b6f*/
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            /* Mi css*/
            .fondo{
                background-color: #1abc9c;;
                height: 657px;
            }
            .fila{
                background-color: #343a40;
                height: 76px;
            }
            .imagen{
                margin-top: 30px;
                text-align: center;
            
            }

            h1 {
                color: White;
                text-decoration: overline;
                text-transform: uppercase;
                text-align: center;
            }
            p{
                color: White;
                text-transform: capitalize;
                text-align: center;
                font-size: 30px;
            }
            .iconos{
                color: White;
                font-size: 25px;
                text-align: center;
            }

            .top-left{
                text-align: left;
                left: 10px;
                top: 18px;
                color: White;
                font-size: 25px;
            }
            .animate__animated.animate__bounce {
                --animate-duration: 5s;
                --animate-delay: 5s;
            }
            
        </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    </head>
    <body class= "fondo">
        <div class="container-fluid">
            <!--Navegacion-->
            <div class="row fila">
                <div class="col top-left">
                    Service Store 
                </div>
                <div class="col">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
            <!--Imagen-->
            <div class="row justify-content-center ">
                <div class="col imagen animate__animated animate__pulse">
                    <img src="https://scontent.flim11-1.fna.fbcdn.net/v/t1.15752-9/118214942_3460942777290404_7193482590389697185_n.jpg?_nc_cat=105&_nc_sid=b96e70&_nc_ohc=1BXQnQNn0ooAX8bP226&_nc_ht=scontent.flim11-1.fna&oh=8191d17c49f7ce71144d35262fb0ebb6&oe=5F6678BC" alt="Responsive image" >
                </div> 
            </div>
            <!-- Fondo-->
            <div class="row justify-content-center">
                <div class="col"> 
                    <h1 class="display-3 animate__animated animate__bounce">
                            SERVICE STORE
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col iconos"> 
                   <!-- <i class="fas fa-screwdriver"> - </i>-->
                    <i class="fas fa-hard-hat"> - </i>
                    <i class="fas fa-brush"> - </i>
                    <i class="fas fa-faucet"> - </i>
                    <i class="fas fa-paint-roller"> - </i>
                    <i class="fas fa-handshake"> - </i>
                    <i class="fas fa-user-shield"> - </i>
                    <i class="fas fa-laptop-medical"> - </i>
                    <i class="fas fa-hammer"> - </i>
                   <!--   <i class="fas fa-wrench"> - </i>-->
                    <i class="fas fa-tools"></i>
                </div>
            </div>
            <!-- Subtitulo -->
            <div class="row">
                <div class="col"> 
                    <p class="center animate__animated animate__bounceInDown">
                        Tienda de Servicios
                    </p>
                </div>
            </div>
        </div>
    </body>

    <!-- Link de Bootstrap final 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
-->

</html>
