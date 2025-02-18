<?php
    class Pet{
        public function __construct(private int $id_pet = 0, private string $nome = "", private int $idade = 0, private string $cor="", private string $porte = ""){}

        public function getIdPet(){
            return $this -> id_pet;
        }
        public function getNome(){
            return $this -> nome;
        }
        public function getIdade(){
            return $this -> idade;
        }
        public function getCor(){
            return $this -> cor;
        }
        public function getPorte(){
            return $this -> porte;
        }
    }

?>