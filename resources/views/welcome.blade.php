<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>Bienvenue</title>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/reservation">Reservation</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/avis">Avis</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/relationship" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Partenaires
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/relationship">BNP-Parisbas</a></li>
                    <li><a class="dropdown-item" href="/relationship">Adidas</a></li>
                    <li><a class="dropdown-item" href="/relationship">Nike</a></li> 
                    <li><a class="dropdown-item" href="/relationship">Sephora</a></li>
                </ul>
                </li>
                
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>
     
     
        <body>

        <script scr="{{asset('js/app.js')}}"></script>
    
        
      


        @yield('hom')
       @yield('content')

           
       
          
       
      
        
        

      

        </body>

        