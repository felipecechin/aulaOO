<?php

class conta {

    private $nome;
    private $saldo;

    function getNome() {
        return $this->nome;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSaldo($saldo) {
        if ($saldo < 0) {
            $saldo = 0;
        }
        $this->saldo = $saldo;
    }

    function informacoesConta() {
        echo 'Titular: ' . $this->nome;
        echo '<br>';
        echo 'Saldo: ' . $this->saldo;
    }

}

$conta = new conta();
$conta->setNome('Alberto');
$conta->setSaldo(-5);
$conta->informacoesConta();
?>