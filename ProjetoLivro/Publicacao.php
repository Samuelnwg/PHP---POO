<?php
interface Publicacao {
    // Métodos abstratos
    public function abrir();
    public function fechar();
    public function folhear($p);
    public function avancarPag();
    public function voltarPag();
}
