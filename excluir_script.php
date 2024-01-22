
<?php
require("conexao.php");
$id = $_POST ["id"];
$nome = $_POST  ["nome"];

$sql = "DELETE FROM tb_mural WHERE id_mensagem = $id";


if (mysqli_query($conn,$sql)) {
    header("location:pesquisa.php?page=view");
} else {
    echo "nao deu certo";
}

?>










