<?php

    class petDAO extends Conexao{

        public function __construct(){
            parent :: __construct();
        }

        public function buscar_todos_pets(){
            $sql = "SELECT * FROM pets";
            
            try{
                
                $stm = $this -> db -> prepare($sql);
                $stm -> execute();
                $this -> db = null;
                return $stm -> fetchAll(PDO::FETCH_OBJ);

            }catch(PDOException $e){
                $this -> db = null;
                die("Problema ao buscar os pets");
            }
        }

        public function inserir_pet($pet){
            $sql = "INSERT INTO pets (nome, idade, cor, porte) VALUES (?, ?, ?, ?)";

            try{
                
                $stm = $this -> db -> prepare($sql);
                $stm -> bindValue(1, $pet -> getNome());
                $stm -> bindValue(2, $pet -> getIdade());
                $stm -> bindValue(3, $pet -> getCor());
                $stm -> bindValue(4, $pet -> getPorte());
                $stm -> execute();
                $this -> db = null;
                return "Pet inserido com sucesso";

            }catch(PDOException $e){
                $this -> db = null;
                die("Problema ao inserir o pet");
            }
        }

         public function buscar_um_pet($pet){
            // $sql = "UPDATE pets SET (nome, idade, cor, porte) VALUES (?, ?, ?, ?) WHERE id_pet = ?";
            $sql = "SELECT * FROM pets WHERE id_pet = ?";

            try{
                $stm = $this -> db -> prepare($sql);
                $stm -> bindValue(1, $pet->getIdPet());
                $stm -> execute();
                $this -> db = null;
                return "Pet encontrado com sucesso com sucesso";

            }catch(PDOException $e){
                $this -> db = null;
                die("Problema ao buscar o pet");
            }
        }

        public function alterar_pet($pet){
            $sql = "UPDATE pets nome = ?, idade = ?, cor = ?, porte = ? WHERE id_pet = ?";

            try{
                $stm = $this -> db -> prepare($sql);
                $stm -> bindValue(1, $pet -> getNome());
                $stm -> bindValue(2, $pet -> getIdade());
                $stm -> bindValue(3, $pet -> getCor());
                $stm -> bindValue(4, $pet -> getPorte());
                $stm -> bindValue(5, $pet -> getIdPet());
                $this -> db = null;
                return "Pet alteradp com sucesso com sucesso";

            }catch(PDOException $e){
                $this -> db = null;
                die("Problema ao alterar o pet");
            }
        }

         public function apagar_pet($pet){
            $sql = "DELETE FROM pets WHERE id_pet = ?";

            try{
                
                $stm = $this -> db -> prepare($sql);
                $stm -> bindValue(1, $pet->getIdPet());

                $stm -> execute();
                $this -> db = null;
                return "Pet deletado com sucesso com sucesso";

            }catch(PDOException $e){
                $this -> db = null;
                die("Problema ao inserir o pet");
            }
        }
    }

?>