<?php
$servidor = "localhost";
$usuarioBD = "root";
$pwdBD = "";
$nomBD = "progra";

$db = mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);
if(!$db)
{
    die("La conexión fallo: ".mysql_connect_error());
}
else
{
    mysqli_query($db, "SET NAMES 'UTF8'");
}

?>


