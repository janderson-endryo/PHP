<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>pesquisa</title>
  </head>
  <body>

  <?php
  require("conexao.php");

  if (isset($_POST['busca'])) {
        $pesquisa = $_POST['busca'];
  } else {
    $pesquisa = '';
  } 

   //$pesquisa = $_POST['busca'] ?? '' ; 

  $sql = "SELECT * FROM tb_mural WHERE nome LIKE '%$pesquisa%'" ;

  $dados = mysqli_query($conn,$sql);
  
  ?>
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid"> 
    <form class="d-flex" role="search" action = "pesquisa.php" method = "POST">
      <input class="form-control me-2" type="search" placeholder="pesquisar" aria-label="Search" name = "busca">
      <button class="btn btn-outline-success" type="submit">pesquisar</button>
    </form>
    <a class="btn btn-primary btn-lg" href="index.php" role="button">volta para opções</a>
  </div>
</nav>

<table class="table">
  <caption>LISTA DE USUARIO</caption>
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nome</th>
      <th scope="col">mensagem</th>
      <th scope="col">data</th>
      <th scope="col">hora</th>
      <th scope="col">funções</th>
    </tr>
  </thead>
  <tbody>

  <?php
  while ($linha = mysqli_fetch_assoc($dados)) {
    $id = $linha['id_mensagem'];
    $nome = $linha['nome'];
    $mensagem = $linha['mensagem'];
    $data = $linha['data'];
    $hora = $linha['hora'];
    $data = mostra_data($data);

    echo  "<tr>
             <th scope='row'>$id</th>
             <td>$nome</td>
             <td>$mensagem</td>
             <td>$data</td>
             <td>$hora</td>
             <td width = 150px>
             <a href='editar_cadastro.php?id=$id' class='btn btn-success btn-sm'>editar</a> 
             <a href='#' class='btn btn-danger btn-sm'>excluir</a>
             </td>
        </tr>";
    } 
    
  ?>

  </tbody>
</table>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>