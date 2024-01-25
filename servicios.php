<!doctype html>
<html lang="es">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
</head>

<body>
<style>
  h4{
    font-family: cursive;
  }
  h5{
    text-align:center;
    font-family: cursive;
  }
  label{
    font-family: cursive;
    font-size: 1.2em;
    
  }
  </style>
  <main>
     
<?php
$email = $psw = $emailErr = $pswErr="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty($_POST["email"]))
{
  $emailErr="Email Requerido";
}
else
{
  $email=verificaEntrada($_POST["email"]);
}
if(empty($_POST["password"]))
{
  $pswErr="Contraseña Requerido";
}
else
{
  $email=verificaEntrada($_POST["password"]);
}
}
function verificaEntrada($entrada){
  $entrada = trim($entrada);
  $entrada = stripslashes($entrada);
  $entrada = htmlspecialchars($entrada);
  return $entrada;
      }

?>
   <br>
   <h1>Inicio de sesion </h1>
   <h5>Por favor ingrese sus credenciales</h5>
<div class="container" style="background-color:#1C2424">
  <h4>Iniciar Sesion</h4>
  <form action="validar.php" method="post">
    <div class="form-group" >
      <label for="email">Email:</label>
      <span class="error"><?php echo $emailErr;?></span>

      <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electronico" name="email">
      
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <span class="error"><?php echo $pswErr;?></span>
      <input type="password" class="form-control" id="pwd" placeholder="Ingresa la contraseña" name="password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Recuerdame</label>
    </div>
    <button type="submit" class="btn btn-primary">Ingresar</button>
  </form>
</div>

</div>
  </div>
