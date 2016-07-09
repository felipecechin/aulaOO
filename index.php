<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class carro {

            private $marca;
            private $modelo;
            private $cor;
            private $ano;

            public function setMarca($m) {
                $this->marca = $m;
            }

            public function setModelo($mo) {
                $this->modelo = $mo;
            }

            public function setCor($c) {
                $this->cor = $c;
            }

            public function setAno($a) {
                $this->modelo = $a;
            }

            public function getMarca() {
                return $this->marca;
            }

            public function getModelo() {
                return $this->modelo;
            }

            public function getCor() {
                return $this->cor;
            }

            public function getAno() {
                return $this->ano;
            }

            public function getCarro() {
                return 'Marca: ' . $this->marca . '<br>Modelo: ' . $this->modelo . '<br>Cor: ' . $this->cor . '<br> Ano: ' . $this->ano;
            }

        }

        $c = new carro();
        $c->setMarca("Ford");
        $c->setModelo("EcoSport");
        $c->setCor("Preta");
        $c->setAno(2016);

        echo $c->getMarca();
        echo '<br>';
        echo $c->getModelo();
        echo '<br>';
        echo $c->getCarro();
        ?>
    </body>
</html>
