<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desafio Programador PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
<?php       $sql = \TesteProgramadorPHP1\MySql::connect()->prepare("SELECT * FROM tb_produtos");
			$sql->execute();
            $info = $sql->fetchAll();
?>


  <body>
  <?php include('includes/header.php');?>

  <div class="container">
            <h1>Produtos</h1>
            <form  method="post"> 
                <div class="selecionar">
                    <select method="post" name="Dado">
                        <?php foreach ($info as $key => $value){?>
                            <option value=<?php echo $value['id']?>>Produto:  <?php echo $value['nome'] ;?>--<?php echo $value['valor'];?>R$</option><?php }?>
                    <button>Editar</button>
                    <button>Excluir</button>
                    <BR></BR>
                    <button>CADASTRAR</button>
                    </select>
                </div><!--select-->
            </form>
        </div>
  </body>

</html>

