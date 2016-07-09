<?php

class livro {

    private $nome;
    private $autor;
    private $editora;
    private $nPaginas;
    private $ano;
    private $versao;

    function __construct($nome, $autor, $editora, $nPaginas, $ano, $versao) {
        $this->nome = $nome;
        $this->autor = $autor;
        $this->editora = $editora;
        $this->nPaginas = $nPaginas;
        $this->ano = $ano;
        $this->versao = $versao;
    }

    function getNome() {
        return $this->nome;
    }

    function getAutor() {
        return $this->autor;
    }

    function getEditora() {
        return $this->editora;
    }

    function getNPaginas() {
        return $this->nPaginas;
    }

    function getAno() {
        return $this->ano;
    }

    function getVersao() {
        return $this->versao;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setEditora($editora) {
        $this->editora = $editora;
    }

    function setNPaginas($nPaginas) {
        $this->nPaginas = $nPaginas;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setVersao($versao) {
        $this->versao = $versao;
    }

}

$livro = new livro('Amor e ódio', 'Brenda', 'Moderna', 521, 2014, 2);
echo $livro->getAno();
?>