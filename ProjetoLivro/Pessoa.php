<?php
class Pessoa {
    // Atributos
    private $nome;
    private $idade;
    private $sexo;
    
    // Métodos
    public function fazerAniver() {
        $this->setIdade($this->getIdade() + 1);
    }
    
    // Métodos especiais
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }
}
