@extends('layouts.app')


<!-- respuestas matematicas -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>StackOverLearn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/CSS.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script type="application/javascript" src="../js/validarform.js"></script>
  <style>

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.botones_respuestas{
  margin-bottom: 20px;
  margin-left: auto;
  margin-right: auto;
}

.respuestas{
  color: black;
  margin-top: 20px;
}
.titulo{
  color: white;
  text-align: center;
}
h1{
    color: black;
    text-align: center;
    margin-top: 50px;
}
p{
    text-align: left;
    color: white;
}
label{
  color: white;
}
</style>
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
  <h1>Respuesta</h1>
  <div class="jumbotron">
    <h2 class="titulo">Pregunta</h2>
    <div class="w3-container w3-white">
      <div>
          <h4 class="respuestas">
            <a>Usuario1 pregunta: </a>
          </h4>
        </div>
       <div>
          <h3 class="respuestas">
            <a>¿Cuanto es 1 + 1?</a>
          </h3>
        </div>
        <div><p class="respuestas">Soy subnormal y no se hacer el 1 + 1</p>
        </div>
    </div>
    <hr>
    <form action="/action_page.php">
      <label for="subject">Respuesta</label>
      <textarea id="subject" name="subject" placeholder="Responda aquí a la pregunta..." style="height:200px"></textarea>

      <input type="submit" value="Responder">
    </form>

    <hr>
    <!-- datos personales  -->
    <div>
      <h2 class="titulo">Respuestas</h2>
    </div>
    <hr>
    <div class="w3-container w3-white">
        <h4 class="respuestas">
            <a>Profesor1 respode: </a>
          </h4>
        <div><p class="respuestas">La respuesta es 2 pedazo de desecho humano</p>
        </div>
        <div>
          <button class="btn"><i class="fa fa-thumbs-up"></i></button>
          <button class="btn"><i class="fa fa-thumbs-down"></i></button>
          <input class="botones_respuestas" type="submit" value="Ver perfil">
        </div>
    </div>
    <!-- datos personales fin -->
    <hr>
  </div> <!-- fin jumbotron -->
</div> <!-- fin container -->





  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

</body>
</html>