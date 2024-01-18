<?php


$servido = "localhost";
$user = "root";
$senha = "";
$bd = "bancoteste";

if (mysqli_connect($servido, $user, $senha, $bd) ) {
    echo "conectado!";
} else 
    echo "erro!"


?>