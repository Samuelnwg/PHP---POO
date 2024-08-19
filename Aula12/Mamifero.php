<?php
require_once 'Animal.php';
class Mamifero extends Animal{
    private $corPelo;
    
    #[\Override]
    public function locomover() {
        echo '<p>Correndo</p>';
    }
    
    #[\Override]
    public function alimentar() {
        echo '<p>Mamando</p>';
    }
    
    #[\Override]
    public function emitirSom() {
        echo '<p>Som de Mamifero</p>';
    }
    
    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo): void {
        $this->corPelo = $corPelo;
    }
}
