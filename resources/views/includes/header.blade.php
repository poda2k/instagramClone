<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style/header.css')}}">
    <link rel="stylesheet" href="{{asset('style/index.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://kit.fontawesome.com/0974be164e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>instagram</title>
</head>
<body>
    <!---Official and not clone --->
<div class="navigation">
    <div class="logo">
       <a class="no-underline" href="#">
       Instagram
       </a>
       <i class="bi bi-0-circle-fill"></i>
    </div>
    <div class="navigation-search-container">
       <i class="fa fa-search"></i>
       <input class="search-field" type="text" placeholder="Search">
       <div class="search-container">
          <div class="search-container-box">
             <div class="search-results">
             </div>
          </div>
       </div>
    </div>
    <div class="navigation-icons">
       <a href="#" target ="_blank" class="navigation-link">
       <i class="far fa-compass"></i>
       </a>
       <a class="navigation-link notifica">
          <i class="far fa-heart">
             <div class="notification-bubble-wrapper">
                <div class="notification-bubble">
                   <span class="notification-count">99</span>
                </div>
             </div>
          </i>
       </a>
       <a href="#" class="navigation-link">
       <i class="far fa-user-circle"></i>
       </a>
       @if(Session::has('userId'))
       <form method="post" action="{{route('logout')}}">
         @csrf
         {{-- <a id="signout" class="navigation-link">
            <i class="fas fa-sign-out-alt"></i>
            </a> --}}
            <button type="submit" class="btn btn-primary navigation-link" style="background-color:white;border:0px;padding:0px;"> 
               <i class="fas fa-sign-out-alt"></i>
               </button>
            {{-- {{-- <button type="submit"><a href="#" id="signout" class="navigation-link">
               <i class="fas fa-sign-out-alt"></i>
               </a></button> --}}
       </form> 
         
       @endif
    </div>
 </div>
 <main>
   <p>Scroll down 👇</p>

 <!---Official and not clone --->