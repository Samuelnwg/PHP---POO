<?php 
class Lutador {
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    // Métodos 
    public function apresentar() {
        echo "<p>------------------------------</p>";
        echo "<p>CHEGOU A HORA! O Lutador " . $this->getNome();
        echo " veio diretamente de " . $this->getNacionalidade();
        echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "Kg ";
        echo "<br> Ele tem " . $this->getVitorias() . " vitórias ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates</p>";
    }

    public function status() {
        echo "<p>------------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e ja ganhou " . $this->getVitorias() . " vezes,";
        echo " perdeu " . $this->getDerrotas() . " vezes e ";
        echo "empatou " . $this->getEmpates() . " vezes!";
    }

    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

    // Métodos especiais
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($no): void {
        $this->nome = $no;
    }

    public function setNacionalidade($na): void {
        $this->nacionalidade = $na;
    }

    public function setIdade($id): void {
        $this->idade = $id;
    }

    public function setAltura($al): void {
        $this->altura = $al;
    }

    public function setPeso($pe): void {
        $this->peso = $pe;
        $this->setCategoria();
    }

    private function setCategoria(): void {
        if ($this->peso < 52.2) {

            $this->categoria = "Inválido";

        } elseif ($this->peso <= 70.3) {

            $this->categoria = "Leve";

        } elseif ($this->peso <= 83.9) {

            $this->categoria = "Médio";

        } elseif ($this->peso <= 120.2) {

            $this->categoria = "Pesado";

        } else {
            $this->categoria = "Inválido";
        }
    }

    public function setVitorias($vi): void {
        $this->vitorias = $vi;
    }

    public function setDerrotas($de): void {
        $this->derrotas = $de;
    }

    public function setEmpates($em): void {
        $this->empates = $em;
    }
}