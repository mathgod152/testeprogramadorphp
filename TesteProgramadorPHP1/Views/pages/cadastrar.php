<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desafio Programador PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>



  <body>
  <?php include('includes/header.php');?>

  <div class="container">
            <h1>Cadastro de Produtos</h1>
                <div class="selecionar">

                  <form enctype="multipart/form-data" method="post">
                    <input type="text" name="id" placeholder="id">
                    <input type="text" name="descricao" placeholder="Descrição">
                    <input type="text" name="valorvenda" placeholder="Valor da Venda">
                    <input type="text" name="estoque" placeholder="Estoque">
                    <input type="file" name="img" placeholder="Imagens">
                    <input type="submit" name="registrar" value="Confirmar >">
                  </form><!--post-->

                </div><!--select-->
        </div>
  </body>

</html>

