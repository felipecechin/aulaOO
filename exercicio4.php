<?php

class musica {
    private $nome;
    private $artista;
    private $album;
    
    function getNome() {
        return $this->nome;
    }

    function getArtista() {
        return $this->artista;
    }

    function getAlbum() {
        return $this->album;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setArtista($artista) {
        $this->artista = $artista;
    }

    function setAlbum($album) {
        $this->album = $album;
    }


}
$musica = new musica();
$musica->setNome('Anjos');
echo $musica->getNome();
?>
