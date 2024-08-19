<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
   // Atributos
    private $especialidade;
    private $salario;
    
    // Métodos
    public function receberAum($aum) {
        $this->salario += $aum;
    }
    
    // Métodos especiais
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade): void {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario): void {
        $this->salario = $salario;
    }


}
