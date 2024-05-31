<?php
    class ControleCaixa{
        private $operadores;
        private $entrada;
        private $saida;
        //metodo automático
        public function __construct(){ //metodo construct: método automático - Funciona quando instancia a classe - em java é void
            echo "Mercadinho do Zé das Couves<br />";
            echo "Data: ".date('d/m/Y'). "<br />";
            $this->teste(); //toda funçao q for ser chamada dentro da classe deve conter $this.
        }
        public function teste(){
            echo "<h1>IF - Guarulhos</h1>";
        }
        //Para usar a classe privada, temos que criar 2 métodos públicos -> entrada e saída
        //SET & GET
        public function setNome($nm){
            $this->operadores = $nm;
        }
        public function getNome(){
            return $this->operadores;
        }

        public function setEntrada($en){
            $this->entrada = $en;
        }
        public function getEntrada(){
            return $this->entrada;
        }

        public function setSaida($sa){
            $this->saida = $sa;
        }
        public function getSaida(){
            return $this->saida;
        }

        public function caixas($no, $ent, $sai){
            $this->setNome($no);
            $this->setEntrada($ent);
            $this->setSaida($sai);
            $total = $this->getEntrada() - $this->getSaida();
            echo "<br />Operador: ".$this->getNome()." Total " . $total;
        }

        

    }
?>