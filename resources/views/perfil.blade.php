@extends('layouts.app')

<!-- perfil -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Mundo Assassin's</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/CSS.css">
  <link rel="stylesheet" href="../css/galeria.css">

  
</head>
<body>

 <!-- barra de navegación para el escalado -->
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home">Inicio</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Foro
      </a>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="matematicas">Matematicas</a>
          <a class="dropdown-item" href="lengua">Lengua</a>
          <a class="dropdown-item" href="fisica">Física</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="profesores">Profesores</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contacto">Contacto</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="perfil">Perfil</a>
    </li>
</nav>
<!-- barra de navegación fin -->

<!-- barra de navegación -->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top justify-content-center">
  <!-- Brand/logo -->
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home">Inicio</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Foro
      </a>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="matematicas">Matematicas</a>
          <a class="dropdown-item" href="lengua">Lengua</a>
          <a class="dropdown-item" href="fisica">Física</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="profesores">Profesores</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contacto">Contacto</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="perfil">Perfil</a>
    </li>
</nav>
<!-- barra de navegación fin -->

<div class="container">
  <div class="jumbotron">
    <div class="popup-gallery">
    <a href="../multimedia/imagenes/ac.png">
      <div class="div-imagen">
        <div class="div-size">
            <p class="txt">Fecha de lanzamiento: 2007</p>
            <p class="txt">Plataforma: PS3, XB360, PC</p>
            <p class="txt">Valoración: 9.7</p> 
        </div>
        <img class="desvanecer" src="../multimedia/imagenes/ac.png">
      </div>
    </a>
    <a href="../multimedia/imagenes/ac2.png">
        <div class="div-imagen">
        <div class="div-size">
            <p class="txt">Fecha de lanzamiento: 2009</p>
            <p class="txt">Plataforma: PS3, XB360, PC</p>
            <p class="txt">Valoración: 9.4</p> 
        </div>
        <img class="desvanecer" src="../multimedia/imagenes/ac2.png">
      </div>
    </a>
    <a href="../multimedia/imagenes/acb.png">
        <div class="div-imagen">
        <div class="div-size">
            <p class="txt">Fecha de lanzamiento: 2010</p>
            <p class="txt">Plataforma: PS3, XB360, PC</p>
            <p class="txt">Valoración: 9.8</p> 
        </div>
        <img class="desvanecer" src="../multimedia/imagenes/acb.png">
      </div>
    </a>
    <a href="../multimedia/imagenes/acr.png">
        <div class="div-imagen">
        <div class="div-size">
            <p class="txt">Fecha de lanzamiento: 2011</p>
            <p class="txt">Plataforma: PS3, XB360, PC</p>
            <p class="txt">Valoración: 9.2</p> 
        </div>
        <img class="desvanecer" src="../multimedia/imagenes/acr.png">
      </div>
    </a>
    <a href="../multimedia/imagenes/ac3.png">
        <div class="div-imagen">
        <div class="div-size">
            <p class="txt">Fecha de lanzamiento: 2012</p>
            <p class="txt">Plataforma: PS3, WIIU, XB360, PC</p>
            <p class="txt">Valoración: 9.5</p> 
        </div>
        <img class="desvanecer" src="../multimedia/imagenes/ac3.png">
      </div>
    </a>
    <a href="../multimedia/imagenes/bf.png">
        <div class="div-imagen">
        <div class="div-size">
            <p class="txt">Fecha de lanzamiento: 2013</p>
            <p class="txt">Plataforma: PS4, PS3, PC, WIIU, XBONE, XB360</p>
            <p class="txt">Valoración: 9</p> 
        </div>
        <img class="desvanecer" src="../multimedia/imagenes/bf.png">
      </div>
    </a>
    <a href="../multimedia/imagenes/rogue.png">
        <div class="div-imagen">
        <div class="div-size">
            <p class="txt">Fecha de lanzamiento: 2014</p>
            <p class="txt">Plataforma: PS3, XB360, PC</p>
            <p class="txt">Valoración: 8.2</p> 
        </div>
        <img class="desvanecer" src="../multimedia/imagenes/rogue.png">
      </div>
    </a>
    <a href="../multimedia/imagenes/uni.png">
        <div class="div-imagen">
        <div class="div-size">
            <p class="txt">Fecha de lanzamiento: 2014</p>
            <p class="txt">Plataforma: PS4, XBONE, PC</p>
            <p class="txt">Valoración: 8.5</p> 
        </div>
        <img class="desvanecer" src="../multimedia/imagenes/uni.png">
      </div>
    </a>
    <a href="../multimedia/imagenes/syn.png">
        <div class="div-imagen">
        <div class="div-size">
            <p class="txt">Fecha de lanzamiento: 2015</p>
            <p class="txt">Plataforma: PS4, XBONE, PC</p>
            <p class="txt">Valoración: 8.6</p> 
        </div>
        <img class="desvanecer" src="../multimedia/imagenes/syn.png">
      </div>
    </a>
    <a href="../multimedia/imagenes/ori.png">
        <div class="div-imagen">
        <div class="div-size">
            <p class="txt">Fecha de lanzamiento: 2017</p>
            <p class="txt">Plataforma: PS4, XBONE, PC</p>
            <p class="txt">Valoración: 8.9</p> 
        </div>
        <img class="desvanecer" src="../multimedia/imagenes/ori.png">
      </div>
    </a>
    <a href="../multimedia/imagenes/ody.png">
        <div class="div-imagen">
        <div class="div-size">
            <p class="txt">Fecha de lanzamiento: 2018</p>
            <p class="txt">Plataforma: PS4, XBONE, PC</p>
            <p class="txt">Valoración: 8.2</p> 
        </div>
        <img class="desvanecer" src="../multimedia/imagenes/ody.png">
      </div>
    </a>
    </div>
  </div>
</div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

</body>
</html>