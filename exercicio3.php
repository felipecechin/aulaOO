<?php

class empregado {

    private $nome;
    private $departamento;
    private $horasTrabalhadasNoMes;
    private $salarioPorHora;

    function getNome() {
        return $this->nome;
    }

    function getDepartamento() {
        return $this->departamento;
    }

    function getHorasTrabalhadasNoMes() {
        return $this->horasTrabalhadasNoMes;
    }

    function getSalarioPorHora() {
        return $this->salarioPorHora;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    function setHorasTrabalhadasNoMes($horasTrabalhadasNoMes) {
        $this->horasTrabalhadasNoMes = $horasTrabalhadasNoMes;
    }

    function setSalarioPorHora($salarioPorHora) {
        $this->salarioPorHora = $salarioPorHora;
    }

    function mostraDados() {
        echo '<h3>Dados do empregado</h3>';
        echo '<br>';
        echo 'Nome: ' . $this->getNome();
        echo '<br>';
        echo 'Departamento: ' . $this->getDepartamento();
        echo '<br>';
        echo 'Horas trabalhadas no mês: ' . $this->getHorasTrabalhadasNoMes();
        echo '<br>';
        echo 'Salário por hora: ' . number_format($this->getSalarioPorHora(), 2, ',', '.');
    }

    function calculoSalarioMensal() {
        $hM = $this->getHorasTrabalhadasNoMes();
        $sH = $this->getSalarioPorHora();
        return $hM * $sH;
    }

}

$empregado = new empregado();
$empregado->setNome('Arthur');
$empregado->setDepartamento('Almoxarifado');
$empregado->setHorasTrabalhadasNoMes(40);
$empregado->setSalarioPorHora(1400);
$empregado->mostraDados();
?>
