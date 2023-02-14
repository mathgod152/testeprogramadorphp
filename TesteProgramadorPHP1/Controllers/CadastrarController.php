<?php 

    namespace TesteProgramadorPHP1\Controllers;

    class CadastrarController{

        public function index(){

            if(isset($_POST['registrar'])){
                $id = $_POST['id'];
                $descricao = $_POST['descricao'];
                $valorvenda = $_POST['valorvenda'];
                $estoque = $_POST['estoque'];
                if(isset($_FILES['img']));{
                    $arquivo = $_FILES['img'];

                    if($arquivo['error']){
                        die(\TesteProgramadorPHP1\Utilidades::alerta('Erro ao enviar arquivo'));
                    }

                    $pasta= "uploads/components/";
                    $nomedoArquivo = $arquivo['name'];
                    $novonomedoArquivo = uniqid();
                    $extensao = strtolower(pathinfo($nomedoArquivo,PATHINFO_EXTENSION));
                    if($extensao != 'png'){
                        die(\TesteProgramadorPHP1\Utilidades::alerta('Arquivo em formato não suportado, favor enviar em .png'));
                    }
                    $path = $pasta . $novonomedoArquivo . "." . $extensao;
                    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);
                    if($deu_certo){
                        $registroimg = \TesteProgramadorPHP1\MySql::connect()->prepare("INSERT INTO imagens VALUES (null,?,?,?)");
                        $registroimg->execute(array($id,$novonomedoArquivo,$path));
                        $registro = \TesteProgramadorPHP1\MySql::connect()->prepare("INSERT INTO tb_produtos VALUES (?,?,?,?)");
                        $registro->execute(array($id,$descricao,$valorvenda, $estoque));
                        \TesteProgramadorPHP1\Utilidades::alerta('Registrado com sucesso');
                        \TesteProgramadorPHP1\Utilidades::redirect(INCLUDE_PATH);
                    }else{
                        die(\TesteProgramadorPHP1\Utilidades::alerta('Deu errado'));
                        \TesteProgramadorPHP1\Utilidades::redirect(INCLUDE_PATH);
                    }


                }


                


            }

            \TesteProgramadorPHP1\Views\MainView::render('cadastrar');
              
        }

    }

?>