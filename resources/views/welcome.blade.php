<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Planer</title>

        <!-- Bootstrap - CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="bg-info bg-gradient">
        @if (Route::has('login'))
            <header class="d-flex flex-wrap justify-content-between p-2 shadow bg-dark ">
            <div class="col-2 p-2">
                <a href="{{ route('home') }}">
                     <img class="img-fluid" src="{{ asset('img/logo.png') }}" alt="Logo">
                 </a>
            </div>     
            
                <div class="d-flex flex-wrap align-items-center gap-2">
                    @auth
                        <a class="btn btn-outline-secondary" href="@if(Auth::user()->type == 'admin') {{ route('admin.dashboard') }}
                            @elseif (Auth::user()->type == 'user') {{ route('user.dashboard') }} @endif">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary rounded-pill">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 btn btn-success rounded-pill">Register</a>
                        @endif
                    @endauth
                </div>
            </header>
        @endif
      
        <div class="container">
            <div class="row flex-wrap my-4 shadow-lg p-5 rounded-3 bg-light">
                <div class="col-12 col-md-6 order-2 order-md-1 d-flex align-items-center ">
                    <h1 class="py-2 text-center text-success fw-bold">Planeje suas tarefas diárias sem perder tempo!<br>O Planer facilita sua organização pra você não perder nada!</h1>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 ">
                    <img class="img-fluid" src="{{ asset('img/pagina_inicial.png') }}" alt="">
                </div>
            </div>

        </div>
        
    </body>
    
    <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-3">
    <!-- Section: Social media -->
    <section class="mb-6">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background: linear-gradient(to right, #5ccb68, #04c7ef);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
</html>
