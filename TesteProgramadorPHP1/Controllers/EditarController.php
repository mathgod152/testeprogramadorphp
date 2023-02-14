<?php 

    namespace TesteProgramadorPHP1\Controllers;

    class EditarController{

        public function index(){

            if(isset($_POST['edit'])){
                if(isset($_POST['edit'])){
                    $id= isset($_POST['Dado']) ? $id=$_POST['Dado'] : 0;
                    $descricao = $_POST['descricao'];
                    $valorvenda = $_POST['valorvenda'];
                    $estoque = $_POST['estoque'];
                    $registro = \TesteProgramadorPHP1\MySql::connect()->prepare("UPDATE tb_produtos SET descricao = ?, 	valorvenda = ?, estoque= ? WHERE id = ?");
                    $registro->execute(array($descricao,$valorvenda, $estoque,$id));
                    \TesteProgramadorPHP1\Utilidades::alerta('editado com sucesso'); 
                    \TesteProgramadorPHP1\Utilidades::redirect(INCLUDE_PATH);
                }
            }elseif(isset($_POST['delet'])){
                $id= isset($_POST['Dado']) ? $id=$_POST['Dado'] : 0;
                $registro = \TesteProgramadorPHP1\MySql::connect()->prepare("DELETE FROM tb_produtos WHERE id = ?");
                $registro->execute(array($id));          
                \TesteProgramadorPHP1\Utilidades::alerta('editado com sucesso');     
                \TesteProgramadorPHP1\Utilidades::redirect(INCLUDE_PATH); 
            }

            \TesteProgramadorPHP1\Views\MainView::render('editar');
              
        }

    }

?>