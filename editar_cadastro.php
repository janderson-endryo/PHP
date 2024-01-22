<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>editar cadastro</title>
  </head>
  <body>

  <?php

  require('conexao.php');

  $id = $_GET ["id"];

  $sql = "SELECT * FROM tb_mural WHERE id_mensagem = '$id'"; 
  $dados = mysqli_query($conn,$sql);
  $linhaa = mysqli_fetch_assoc($dados);
  ?>

  <div class="container">
    
    <div class="row">
        <div class="col">
            <h1>cadastro </h1>

            <form action="editar_script.php" method="post" enctype="multipart/form-data">

            <div class="form-group">

            <label for="seu nome">EDITAR NOME</label>
            
            <input type="text" class="form-control" name="nome" id="" placeholder="Seu Nome" required value = '<?php echo $linhaa['nome']; ?>'>
            </div>

            <div class="form-group">

            <label for="mensagem">EDITAR MENSAGEM</label>

            <textarea class="form-control" id="mensagem" rows="3" name ="mensagem" placeholder="escreva uma mensagem"><?php echo $linhaa['mensagem'];?></textarea>

            </div>

            <div class="form-group">
            <input type="submit" value="salva alteração" class='btn btn-success'>
            <a class="btn btn-primary" href="pesquisa.php">volta para pesquisa</a>
            </div>

            <input type="hidden" name="id" value = "<?php echo $linhaa['id_mensagem'] ?>;">
            
            </form>
            
        </div>
    </div>
  </div>
  
  
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>