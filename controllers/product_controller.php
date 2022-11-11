<?php 
    class Product{
        public static function index(){
            $titulo = "Productos";
            require_once "views/templates/header.php";
            require_once "views/templates/navbar.php";
            require_once "views/products/index.php";
            require_once "views/templates/footer.php";
         }
         
         public static function search(){
            
         }

         public function show(){
            $titulo = "Productos";
            require_once "views/templates/header.php";
            require_once "views/templates/navbar.php";
            require_once "views/products/show.php";
            require_once "views/templates/footer.php";
         }
    }
?>