<?php

    namespace TesteProgramadorPHP1\Views;

    class MainView{
        
        public static function render($filename){

			include('pages/'.$filename.'.php');
        }



    }

?>