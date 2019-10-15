<?php

require_once "Mamifero.php";

class Cachorro extends Lobo
{
    public function reagir($frase)
    {
        if ($frase = "Toma comida") {
            echo "Abanar e latir";
        } else {
            echo "Rosnar";
        }
    }

    public function reagir($hora, $min)
    {
        if ($hora < 12) {
            echo "Abanar";
        } elseif ($hora > 12) {
            echo "Ignorar";
        } else {
            echo "Abanar e latir";
        }
    }

    public function reagir($dono)
    {
        if ($dono) {
            echo "Abanar";
        } else {
            echo "Rosnar e latir";
        }
    }

    public function reagir($idade, $peso)
    {

    }

}