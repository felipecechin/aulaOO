<?php

class pessoa {

    private $nome, $idade, $cpf;

    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getCpf() {
        return $this->cpf;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

}

class aluno extends pessoa {

    private $matricula, $serie;

    function getMatricula() {
        return $this->matricula;
    }

    function getSerie() {
        return $this->serie;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setSerie($serie) {
        $this->serie = $serie;
    }

    function mostraDados() {
        echo 'Nome: ' . $this->getNome();
        echo '<br>';
        echo 'Idade: ' . $this->getIdade();
        echo '<br>';
        echo 'Cpf: ' . $this->getCpf();
        echo '<br>';
        echo 'Matrícula: ' . $this->getMatricula();
        echo '<br>';
        echo 'Série: ' . $this->getSerie();
    }

}

class professor extends pessoa {

    private $codigoP, $horasAulaPorSemana;

    function getCodigoP() {
        return $this->codigoP;
    }

    function getHorasAulaPorSemana() {
        return $this->horasAulaPorSemana;
    }

    function setCodigoP($codigoP) {
        $this->codigoP = $codigoP;
    }

    function setHorasAulaPorSemana($horasAulaPorSemana) {
        $this->horasAulaPorSemana = $horasAulaPorSemana;
    }

    function mostraDados() {
        echo 'Nome: ' . $this->getNome();
        echo '<br>';
        echo 'Idade: ' . $this->getIdade();
        echo '<br>';
        echo 'Cpf: ' . $this->getCpf();
        echo '<br>';
        echo 'Código do professor: ' . $this->getCodigoP();
        echo '<br>';
        echo 'Horas-aula por semana: ' . $this->getHorasAulaPorSemana();
    }

}

$professor = new professor();
$professor->setNome('Olavo');
$professor->setCpf(47918787442);
$professor->setIdade(54);
$professor->setCodigoP(3222);
$professor->setHorasAulaPorSemana(20);
$professor->mostraDados();
?>