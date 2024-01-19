<?php
$servido = "localhost";
$user = "root";
$senha = "vertrigo";
$bd = "bancoteste";
$conn = mysqli_connect($servido, $user, $senha, $bd);

/*if ( ) {
    echo "conectado!";
} else 
    echo "erro!!"

*/

function mostra_data($data) {
    $d = explode('-', $data);
    $escreve = $d[2] ."/" .$d[1] ."/" .$d[0];
    return $escreve;
}
?>