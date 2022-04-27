<?php

class Matricial extends Impressora {

    private $numAgulhas;
    private $imprimeVias;

    public function __construct($marca, $modelo, $numAgulhas, $colorida, $imprimeVias, $peso)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setnumAgulhas($numAgulhas);
        $this->setColorida($colorida);
        $this->setImprimeVias($imprimeVias);
        $this->setPeso($peso);
    }
    
    public function getnumAgulhas() {
        return $this->numAgulhas;
    }

    public function setnumAgulhas($numAgulhas){
        $this->numAgulhas = $numAgulhas;
    }

    public function getImprimeVias() {
        return $this->imprimeVias;
    }

    public function setImprimeVias($imprimeVias){
        $this->imprimeVias = $imprimeVias;
    }





}