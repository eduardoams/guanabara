<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>
            <?php

            //Sobreposição: Substituir um método que veio da classe mãe diretamente da sua classe filha
                require_once "Mamifero.php";
                require_once "Reptil.php";
                require_once "Peixe.php";
                require_once "Ave.php";
                require_once "Canguru.php";
                require_once "Cachorro.php";
                require_once "Cobra.php";
                require_once "Tartaruga.php";
                require_once "GoldFish.php";
                require_once "Arara.php";
                require_once "Peixe.php";
                require_once "Ave.php";

                //Herança da classe "Animal"
                $m = new Mamifero();
                    $k = new Cachorro();
                    $c = new Canguru();

                $a = new Ave();
                    $ar = new Arara();

                $p = new Peixe();
                    $g = new GoldFish();

                $r = new Reptil();
                    $t = new Tartaruga();

                echo '<p><strong>HERANÇA DA CLASSE "MAMÍFERO"</strong></p>';
                $m->locomover(); //Existe um método em "Mamífero", a classe filha de "Animal"
                $c->locomover(); //Existe um método em "Canguru"
                $k->locomover(); //Não existe um método em "Cachorro"
                $t->locomover(); //Existe um método em "Tartaruga"

                echo "<hr>";

                echo '<p><strong>EMITINDO SOM</strong></p>';
                $k->emitirSom();



            ?>
        </body>
    </html>