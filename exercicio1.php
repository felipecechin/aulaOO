<?php

class pessoa {

    private $nome;
    private $sobrenome;
    private $idade;
    private $telefone;
    private $endereco;

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

}

$pessoa = new pessoa();
$pessoa->setIdade(15);
echo $pessoa->getIdade();
?>