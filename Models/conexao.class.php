<?php

    class Conexao{

        protected $db = null;

        public function __construct(){

            $parametros = "mysql:host=localhost;port=3307;dbname=adocao;charset=utf8mb4";

            try{

                $this -> db = new PDO($parametros, "root", "root");

            }catch(PDOException $e){

                echo "Problema na conexão";
                die();

            }

        }
    }

?>