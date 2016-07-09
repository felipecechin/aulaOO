<?php

class serVivo {

    private $especie, $nomeComum;

    function getEspecie() {
        return $this->especie;
    }

    function getNomeComum() {
        return $this->nomeComum;
    }

    function setEspecie($especie) {
        $this->especie = $especie;
    }

    function setNomeComum($nomeComum) {
        $this->nomeComum = $nomeComum;
    }

}

class animal extends serVivo {

    private $locomocao;

    function getLocomocao() {
        return $this->locomocao;
    }

    function setLocomocao($locomocao) {
        $this->locomocao = $locomocao;
    }

    function mostraDados() {
        echo 'Espécie: ' . $this->getEspecie();
        echo '<br>';
        echo 'Nome comum: ' . $this->getNomeComum();
        echo '<br>';
        echo 'Tipo de locomoção: ' . $this->getLocomocao();
    }

}

class vegetal extends serVivo {

    private $qntdAguaPorDia;

    function getQntdAguaPorDia() {
        return $this->qntdAguaPorDia;
    }

    function setQntdAguaPorDia($qntdAguaPorDia) {
        $this->qntdAguaPorDia = $qntdAguaPorDia;
    }

    function mostraDados() {
        echo 'Espécie: ' . $this->getEspecie();
        echo '<br>';
        echo 'Nome comum: ' . $this->getNomeComum();
        echo '<br>';
        echo 'Quantidade de água por dia de que necessita: ' . $this->getQntdAguaPorDia();
    }

}

$vegetal = new vegetal();
$vegetal->setEspecie('Orchis militaris');
$vegetal->setNomeComum('Orquidea');
$vegetal->setQntdAguaPorDia('1 litro');
$vegetal->mostraDados();
?>

