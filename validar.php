<?php
   session_start();

   $login = $_POST['email'];
   $contra = $_POST['password'];
   
   $_SESSION['session'] = $login;
require 'servicios.php';
include ('conexion.php');
 $login=$_POST['email'];
 $contra=$_POST['password'];
 
 $_SESSION['email']=$login;
 $db = mysqli_connect('localhost','root','','progra');

  $consulta = "SELECT * FROM USUARIOS WHERE login = '$login' AND psw= '".sha1($contra)."'" ;
  $resultado = mysqli_query($db,$consulta);
  $filas = mysqli_fetch_array($resultado);
  if($filas)
{
  if($filas['rol']=='admin'){
    header("location:admin.php");
   }else
   {
     if($filas['rol'=='empleado'])
     header("location:usuario.php");
   }
}  
  else{
 ?>
    
    
     <h4  >error</h4>
   <?php
  }
  mysqli_free_result($resultado);
  mysqli_close($db);





