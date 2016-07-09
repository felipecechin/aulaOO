<?php

class automovel {

    protected $modelo;

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getAutomovel() {
        echo 'Modelo: ' . $this->getModelo();
    }

}

class lotacao extends automovel {

    protected $numPassagSentados;

    public function setModelo($modelo) {
        parent::setModelo($modelo);
    }

    public function getPassagSentados() {
        return $this->numPassagSentados;
    }

    public function setPassagSentados($passagSentados) {
        $this->numPassagSentados = $passagSentados;
    }

    public function getAutomovel() {
        echo parent::getAutomovel();
        echo 'Passageiros sentados: ' . $this->getPassagSentados();
    }

}

$c = new lotacao();
$c->setModelo('ford');
echo $c->getModelo();
?>