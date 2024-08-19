<?php
require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;
    
    #[\Override]
    public function alimentar() {
        echo '<p>Comendo frutas</p>';
    }

    #[\Override]
    public function emitirSom() {
        echo '<p>Som de ave</p>';
    }

    #[\Override]
    public function locomover() {
        echo '<p>Voando</p>';
    }
    
    public function fazerNinho() {
        echo '<p>Consrtuiu um ninho</p>';
    }
    
    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena): void {
        $this->corPena = $corPena;
    }
}
