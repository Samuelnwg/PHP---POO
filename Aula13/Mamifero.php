<?php
require_once 'Animal.php';
class Mamifero extends Animal{
    protected $corPelo;
 
    #[\Override]
    public function emitirSom() {
        echo "<p>Som de Mamífero</p>";
    }
}
