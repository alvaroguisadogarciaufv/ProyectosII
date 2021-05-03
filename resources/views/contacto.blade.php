@extends('layouts.app')

<!-- contacto -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>StackOverLearn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/CSS.css">
  <script type="application/javascript" src="../js/validarform.js"></script>
  
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

<!-- formulario -->
<div class="container">
  <div class="jumbotron">
    <form action="https://postman-echo.com/post" method="post" onsubmit="return validarform();"> <!-- comienzo del formulario -->
      <table> <!-- tabla con el tipo de lineas que se ven -->
        <thead>
          <h1>Formulario de contacto</h1>
        </thead>
        <tbody>
          <tr>
            <th>Nombre</th>
            <td><input type="text" name="nombre" size="30" id="nombre" placeholder="Nombre" required/></td>
          </tr>
          <tr>
            <th>Apellidos</th>
            <td><input type="text" name="apellidos" id="apellidos" placeholder="Apellido1 Apellido2" size="30" required/></td>
          </tr>
          <tr>
            <th>Nueva Contraseña</th>
            <td><input type="password" name="password1" id="password1" placeholder="Contraseña" size="30" required/></td>  
          </tr>
          <tr>
            <th>Repite la Contraseña</th>
            <td><input type="password" name="password2" id="password2" placeholder="Contraseña" size="30" required/></td>  
          </tr>
          <tr>
            <th>Email</th>
            <td><input type="email" name="email" id="email" size="30" placeholder="ejemplo@ejemplo.com" required/></td>
          </tr>
          <input type="hidden" name="valor_variable" value="0"/>
        </tbody>
        <tfoot>
          <tr>
            <td><input type="submit" name="Entrar"></td>
          </tr>
        </tfoot>  
      </table>
    </form> <!-- formulario fin -->

    <hr>
    <!-- datos personales  -->
    <h1>Datos Personales</h1>
    <div class="container-fluid bg-1 text-center">
      <div class="datos">
        <img src="../multimedia/imagenes/perfil.png" style="max-width: 30%">
      </div>
    </div>
    <p>Nombre: Carlos</p>
    <p>Apellidos: Castillo González</p>
    <p>Fecha de Nacimiento: 8 de mayo de 1997</p>
    <p>Email: carlos.castillog7@gmail.com</p>
    <p>Lugar de nacimiento: Madrid, España</p>
    <!-- datos personales fin -->

  </div> <!-- fin jumbotron -->
</div> <!-- fin container -->

<div class="row h-full">
  <div class="col-8 offset-2 col-lg-8 offset-lg-2 align-self-center espacio">
    <div class="gameplay">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3032.0353985694915!2d-3.622504584503968!3d40.54080707935099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422d01b98d4e8b%3A0xe4a0296a5c623e29!2sAv.%20Severo%20Ochoa%2C%2012%2C%2028703%20San%20Sebasti%C3%A1n%20de%20los%20Reyes%2C%20Madrid!5e0!3m2!1ses!2ses!4v1591858808192!5m2!1ses!2ses" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>        
    </div>
  </div>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

</body>
</html>