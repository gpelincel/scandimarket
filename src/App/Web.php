<?php
namespace Source\App;

    class Web{

        public function home(){
            // require_once __DIR__.'/../../views/home.php';
            echo "<h1>Hello World</h1>";
        }

        public function addproduct(){
            require_once __DIR__.'/../../views/addproduct.php';
        }

        public function error($data){
            echo "<h1>Erro {$data["errcode"]}</h1>";
            var_dump($data);
        }
    }