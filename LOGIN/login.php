<?php
$user = $_POST["user"];
$pass = $_POST["pass"];
$usuario = "admin";
$contraseña = "1234";

 if ($usuario == $user && $contraseña == $pass) {
header ("location:https://www.potrerodigital.org/");
} else { header ("location:incorrecto.html");
}

 ?>
