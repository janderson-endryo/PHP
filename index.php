<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>cadastro</title>
  </head>
  <body>

  <div class="container">
    <div class="row">
        <div class="col">
            <h1>cadastro</h1>

            <form action="cadastro.php" method="post">

            <div class="form-group">

            <label for="seu nome">SEU NOME</label>
            
            <input type="text" class="form-control" name="nome" id="" placeholder="Seu Nome">
            </div>

            <div class="form-group">

            <label for="mensagem">ESCREVA SUA MENSAGEM</label>

            <textarea class="form-control" id="" rows="3" nome = "mensagem" placeholder="escreva uma mensagem"></textarea>

            </div>

            <div class="form-group">
            <input type="submit" value="enviar" class='btn btn-success'>
            </div>


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