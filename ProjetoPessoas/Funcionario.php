<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa{
    // Atributos
    private $setor;
    private $trabalhando;
    
    // Métodos
    public function mudarTrabalho() {
        if ($this->getTrabalhando()) {
            $this->setTrabalhando(false);
        } else {
            $this->setTrabalhando(true);
        }
    }
    
    // Métodos especiais
    public function getSetor() {
        return $this->setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setSetor($setor): void {
        $this->setor = $setor;
    }

    public function setTrabalhando($trabalhando): void {
        $this->trabalhando = $trabalhando;
    }


}
