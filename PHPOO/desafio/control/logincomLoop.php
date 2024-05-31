<?php
    // COM LOOP WHILE 
    class LoginEncaps{
        // credenciais definidas previamente (login sem DB): 
        private $user = "Anselmo";
        private $senha = "mario";
        private $perfil = "prof";

        // variaveis auxiliares (ajudar na conferência das info):
        private $maxTentativas = 3;
        private $credenciaisValidas = True;

        // Método contrutor -> executado toda vez que é criado um objeto do tipo LoginEncaps
        public function __construct(){
            session_start(); 

            if (!isset($_SESSION['try'])) {
                $_SESSION['try'] = 0;
            }
        }

        // Validar as credenciais preenchidas 
        public function getUser($us){
            if($this->user != $us){
                $this->credenciaisValidas = False;
            }
            return $this->user;
        }

        public function getSenha($pass){
            if($this->senha != $pass){
                $this->credenciaisValidas = False;
            }
            return $this->senha;
        }

        public function getPerfil($per){
            if($this->perfil != $per){
                $this->credenciaisValidas = False;
            }
            return $this->perfil;
        }

        // Chama os outros métodos a partir do input do usuário
        public function credenciais($us, $se, $per){
            $this->getUser($us);
            $this->getSenha($se);
            $this->getPerfil($per);
            $this->validar();
        }

        // Validar as regras solicitadas -> Máx de 3 tentativas
        public function validar(){
            while ($_SESSION['try'] < $this->maxTentativas){
                if ($this->credenciaisValidas){ 
                    $_SESSION['try'] = 0;
                    $_SESSION['usuario'] = $this->user;
                    header('Location: ../view/telaprincipal.php'); //redireciona para a prox pag
                    exit; //redirecionar e parar a execução do loop
                } else{
                    $_SESSION['try'] += 1;
                    
                    if ($_SESSION['try'] >= $this->maxTentativas){ // se excedeu o limite de tentativas
                        $_SESSION['try'] = 0; 
                        header('Location: ../view/telalogin.php?cadastro'); //redireciona para a pag de cadastro
                    } else{
                        header('Location: ../view/telalogin.php?err'); // retorna erro
                    } 
                    exit;
                }
            } 
        }
        
    }
?>