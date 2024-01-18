<?php
require("conexao.php");



$nome = $_POST  ["nome"];
$mensagem = $_POST ["mensagem"];
$data = date('y-m-d');
$hora = strftime('%H:%M:%S:');

$sql = "INSERT INTO Tb_mural (id_mensagem, nome, mensagem,data,hora) VALUES ('', '$nome','$mensagem','$data','$hora')";

if (mysqli_query($conn,$sql)) {
    header("location:exibir.php?page=view");
} else {
    echo "nao deu certo";
}
?>