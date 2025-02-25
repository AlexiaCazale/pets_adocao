<?php
  require_once "Models/Conexao.class.php";
  require_once "Models/petDAO.class.php";
  require_once "Models/Pet.class.php";

    class petController{
        public function listar(){
            //Buscar os pets no BD
          
            $petDAO = new petDAO();
            $ret = $petDAO -> buscar_todos_pets();
            // var_dump($ret);
            //Mostrar os pets
            require_once "Views/listar_pets.php";
        }
        
        public function cadastrar(){
            $msg = array("", "", "", "");
            $erro = false;
            if($_POST){
                //Verificas os dados digitados
                if(empty($_POST["nome"])){
                    $msg[0] = "Preencha o nome do pet";
                    $erro = true;
                }
                if($_POST["idade"] <= 0){
                    $msg[1] = "Idade inválida";
                    $erro = true;
                }
                if(empty($_POST["cor"])){
                    $msg[2] = "Preencha a cor do pet";
                    $erro = true;
                }
                if($_POST["porte"] == 0){
                    $msg[3] = "Escolha um porte";
                    $erro = true;
                }
                if(!$erro){

                    //Criar uma instância do objeto pet
                    $pet = new Pet(0, $_POST["nome"], $_POST["idade"], $_POST["cor"], $_POST["porte"]);
                    //Criar uma instância do petDAO
                    $petDAO = new petDAO();
                    //Chamar o método inserir
                    $petDAO->inserir_pet($pet);
                    //Redirecionar para o listar
                    header("location:index.php?controle=petController&metodo=listar");
                    die();
                }
            }

            require_once "Views/form_pets.php";
            //visão formulário cadastrar
        }
        
        public function deletar(){
            if(isset($_GET['id'])){
                $pet = new Pet($_GET['id']);
                $petDAO = new petDAO();
                $ret = $petDAO->apagar_pet($pet);
                header("location:index.php?controle=petController&metodo=listar");
                die();
            }

            require_once "Views/form_pets.php";
        }

        public function alterar(){
            $msg = array("", "", "","");
            if($_POST){
                if(empty($_POST["nome"])){
                    $msg[0] = "Preencha o nome do pet";
                    $erro = true;
                }
                if($_POST["idade"] <= 0){
                    $msg[1] = "Idade inválida";
                    $erro = true;
                }
                if(empty($_POST["cor"])){
                    $msg[2] = "Preencha a cor do pet";
                    $erro = true;
                }
                if($_POST["porte"] == 0){
                    $msg[3] = "Escolha um porte";
                    $erro = true;
                }
                if(!$erro){
                    $pet = new Pet($_POST["id_pet"], $_POST["nome"], $_POST["idade"], $_POST["cord"], $_POST["porte"]);
                    $petDAO = new petDAO();
                    $petDAO -> alterar_pet($pet);

                // header("location:index.php?controle=petController&metodo=listar");

                }
                
                    $pet = new Pet($_GET['id']);
                    $petDAO = new petDAO();
                    $ret = $petDAO->buscar_um_pet($pet);
                    // header("location:index.php?controle=petController&metodo=listar");
                    // die();

            require_once "Views/edit_pet.php";
        }
    }
}

?>