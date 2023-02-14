<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desafio Programador PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
<?php 
      $sql = \TesteProgramadorPHP1\MySql::connect()->prepare("SELECT * FROM tb_produtos");
			$sql->execute();
      $info = $sql->fetchAll();
?>



  <body>
  <?php include('includes/header.php');?>

  <div class="container">
            <form  method="post"> 
                <div class="selecionar">
                    <h1>PRODUTOS CADASTRADOS</h1>
                    <select method="post" name="Dado">
                      <?php foreach ($info as $key => $value){?>
                          <option value=<?php echo $value['id']?>>ID:<?php echo $value['id'] ;?> -- Produto:  <?php echo $value['descricao'] ;?>--<?php echo $value['valorvenda'];?>R$--Estoque:<?php echo $value['estoque'];?></option>   
                      <?php } ?>
                    </select>
                    <form enctype="multipart/form-data" method="post">
                      <input type="text" name="descricao" placeholder="Descrição">
                      <input type="text" name="valorvenda" placeholder="Valor da Venda">
                      <input type="text" name="estoque" placeholder="Estoque">
                      <br>
                      <input method="post" type="submit" name="edit" value="Editar" style="text-decoration:none;background-color: blue; padding:10px;border-radius:5%; color:aliceblue" href="<?php echo INCLUDE_PATH?>home">
                      <input method="post" type="submit" name="delet" value="Deletar" style="text-decoration:none;background-color: Red; padding:10px;border-radius:5%; color:aliceblue" href="<?php echo INCLUDE_PATH?>home">
                  </form><!--post-->                    
                </div><!--select-->
            </form>
        </div>
  </body>

</html>

