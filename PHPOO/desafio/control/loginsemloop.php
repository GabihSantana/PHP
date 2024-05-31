<?php
    // SEM LOOP 
    class LoginEncaps{
        // credenciais definidas previamente: 
        private $user = "Anselmo";
        private $senha = "mario";
        private $perfil = "prof";

        private $credenciais = 0; 

        public function __construct(){
            session_start(); 

            if (!isset($_SESSION['try'])) {
                $_SESSION['try'] = 0;
            }
        }

        // validar as credenciais preenchidas 
        public function getUser($us){
            if($this->user != $us){
                $this->credenciais++;
            }
        }

        public function getSenha($pass){
            if($this->senha != $pass){
                $this->credenciais++;
            }
        }

        public function getPerfil($per){
            if($this->perfil != $per){
                $this->credenciais++;
            }
        }

        public function credenciais($us, $se, $per){
            $this->getUser($us);
            $this->getSenha($se);
            $this->getPerfil($per);
            $this->validar();
        }

        public function validar(){
            if($_SESSION['try'] < 3){
                if($this->credenciais == 0){
                    header('Location: ../view/telaprincipal.php');
                }
                else{
                    $_SESSION['try'] += 1;
                    header('Location: ../view/telalogin.php?err');
                }
            }
            else{
                $_SESSION['try'] = 0;
                header('Location: ../view/telalogin.php?cadastro');
            }
            
        }
    }
?>