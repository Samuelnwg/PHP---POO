<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao {
    // Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    // Métodos
    public function detalhes() {
        echo "<hr>Livro " . $this->titulo . " escrito por " . $this->autor;
        echo "<br> Página: " . $this->totPaginas . " atual " . $this->pagAtual;
        echo "<br> Sendo lido por " . $this->leitor->getNome();
    }
    
    #[\Override]
    public function abrir() {
        $this->setAberto(true);
    }

    #[\Override]
    public function avancarPag() {
        if ($this->pagAtual <= $this->totPaginas) {
            $this->setPagAtual($this->getPagAtual() + 1);
        } else {
            $this->setPagAtual(0);
            $this->setAberto(false);
        }
    }

    #[\Override]
    public function fechar() {
        $this->setAberto(false);
    }

    #[\Override]
    public function folhear($p) {
        if ($p > $this->totPaginas) {
            $this->setPagAtual(0);
        } else {
            $this->setPagAtual($p);
        }
    }

    #[\Override]
    public function voltarPag() {
        if ($this->pagAtual > 0) {
            $this->setPagAtual($this->getPagAtual() - 1);
        } else {
           $this->setPagAtual(0);
           $this->setAberto(false); 
        }
    }

    // Métodos especiais
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void {
        $this->autor = $autor;
    }

    public function setTotPaginas($totPaginas): void {
        $this->totPaginas = $totPaginas;
    }

    public function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }
}
