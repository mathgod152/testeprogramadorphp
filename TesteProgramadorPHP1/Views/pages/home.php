<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desafio Programador PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
<?php       
      $sql = \TesteProgramadorPHP1\MySql::connect()->prepare("SELECT * FROM tb_produtos ORDER BY id ");
			$sql->execute();
      $info = $sql->fetchAll();
      $sql = \TesteProgramadorPHP1\MySql::connect()->prepare("SELECT * FROM imagens");
			$sql->execute();
      $fotos = $sql->fetchAll();
?>


  <body>
  <?php include('includes/header.php');?>

  <div class="container">
            <form  method="post"> 
            <a href="<?php echo INCLUDE_PATH?>cadastrar" style="padding:5px;border-radius:5%;color:aliceblue; text-decoration:none; background-color: green;">CADASTRAR NOVO PRODUTO</a>
                <div class="selecionar">
                    <h1>PRODUTOS CADASTRADOS</h1>                            
                      <table border="1" cellpadding="10">
                        <tr>
                          <th>Foto</th>
                          <th>ID</th>
                          <th>Descrição</th>
                          <th>Valor da Venda</th>
                          <th>Estoque</th>
                        </tr>
                        <?php foreach ($info as $key => $value){?>
                        <tr>
                          <th><?php foreach ($fotos as $key => $value2){?>
                            <?php if($value2['id_produto'] == $value['id']){?>
                              <img src="<?php echo $value2['path'];?>" height="50px" alt=""><?php } ?> <?php }; ?>        
                          </th>

                          <th><?php echo $value['id'] ;?></th>
                          <th><?php echo $value['descricao'] ;?></th>
                          <th><?php echo $value['valorvenda'] ;?></th>
                          <th><?php echo $value['estoque'] ;?></th>
                        </tr>
                        <?php }?>   
                        <tbody>
                        </tbody>
                      </table>
                </div><!--select-->
            </form>
        </div>
  </body>

</html>

