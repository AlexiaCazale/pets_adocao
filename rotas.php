<?php 
    class rotas{
        private array $rotas = array();

        public function get(string $nome, array $dados){
            $this -> rotas["GET"][$nome] = $dados; 
        }
        public function post(string $nome, array $dados){
            $this -> rotas["POST"][$nome] = $dados; 
        }
        public function verificar_rota(string $metodo, string $uri){
            if(isset($this -> rotas[$metodo][$uri])){
                $dados_rota = $this->rotas[$metodo][$uri];
                $classe = $dados_rota[0];
                $metodo = $dados_rota[1];
                $obj = new $classe();
                return $obj -> $metodo();
            }else{
                echo "Rota inválida";
            }
        }
    }

    $route = new Rotas();
    $route ->get("/", [inicioController::class, "inicio"]);
    $route ->get("inserir", [petController::class, "cadastrar"]);
    $route ->get("listar", [petController::class, "listar"]);

?>