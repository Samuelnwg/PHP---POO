<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'Goldfish.php';
            require_once 'Arara.php';
            
            $m = new Mamifero();
            $c = new Canguru();
            $k = new Cachorro();
            
            $m->setPeso(5.70);
            $m->setIdade(8);
            $m->setMembros(4);
            $m->locomover(); // Correndo
            $m->alimentar(); // Mamando
            $m->emitirSom(); // Som de Mamifero
            
            $c->setPeso(55.30);
            $c->setIdade(3);
            $c->setMembros(4);
            $c->locomover(); // Saltando
            $c->alimentar(); // Mamando
            $c->emitirSom(); // Som de Mamifero
            $c->usarBolsa();
            
            $k->setPeso(3.94);
            $k->setIdade(5);
            $k->setMembros(4);
            $k->locomover(); // Correndo
            $k->alimentar(); // Mamando 
            $k->emitirSom(); // Som de Mamifero
            $k->abanarRabo();
        ?>
    </pre>
</body>
</html>