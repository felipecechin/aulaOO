<?php

class automovel {

    public $fabricante;
    public $modelo;
    public $placa;

    function __construct($f = '-', $m = '-', $p = '-') {
        $this->fabricante = $f;
        $this->modelo = $m;
        $this->placa = $p;
    }

    function getFabricante() {
        return $this->fabricante;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getPlaca() {
        return $this->placa;
    }

    function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function mostraAutomovel() {
        echo $this->fabricante . ',' . $this->modelo . ',' . $this->placa;
    }

}

class lotacao extends automovel {

    public $passagPe;
    public $passagSentados;
    public $linha;

    function __construct($f = '-', $m = '-', $p = '-', $ps = '-', $pp = '-', $l = '-') {
        parent::__construct($f, $m, $p);
        $this->passagPe = $pp;
        $this->passagSentados = $ps;
        $this->linha = $l;
    }

    function getPassagPe() {
        return $this->passagPe;
    }

    function getPassagSentados() {
        return $this->passagSentados;
    }

    function getLinha() {
        return $this->linha;
    }

    function setPassagPe($passagPe) {
        $this->passagPe = $passagPe;
    }

    function setPassagSentados($passagSentados) {
        $this->passagSentados = $passagSentados;
    }

    function setLinha($linha) {
        $this->linha = $linha;
    }

    function getAutomovel() {
        echo 'Fabricante: ' . $this->getFabricante() . '<br>Modelo: ' . $this->getModelo() . '<br>Placa: ' . $this->getPlaca() .
        '<br>Passageiros em pé: ' . $this->getPassagPe() . '<br>Passageiros sentados: ' . $this->getPassagSentados() . '<br>Linha: ' . $this->getLinha();
    }

}

//$c = new automovel();
//$c->mostraAutomovel();

//$automovel = new lotacao('Toyota', 'Corolla', 'ABC-111', '32', '40', '32134');
//echo $automovel->setFabricante('toyota');
//echo $automovel->getAutomovel();

$c = new lotacao();
$c->setModelo('Ford');
$c->getAutomovel();


?>
