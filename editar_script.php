<?php
require("conexao.php");
$id = $_POST ["id"];
$nome = $_POST  ["nome"];
$mensagem = $_POST ["mensagem"];
$data = date('y-m-d');
$hora = strftime('%H:%M:%S:');

$sql = "UPDATE tb_mural SET nome = '$nome', mensagem = '$mensagem',data = '$data',hora = '$hora' WHERE id_mensagem = $id ";





if (mysqli_query($conn,$sql)) {
    header("location:pesquisa.php?page=view");
} else {
    echo "nao deu certo";
}
?>