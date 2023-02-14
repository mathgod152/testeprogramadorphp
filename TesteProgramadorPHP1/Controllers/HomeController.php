<?php 

    namespace TesteProgramadorPHP1\Controllers;

    class HomeController{
        
        public function index(){



            \TesteProgramadorPHP1\Views\MainView::render('home');

            }
        }


        
    
?>