<?php

require_once "Animal.php";

//Se estou estendendo de Animal, que é uma classe abstrata, sou obrigado a sobrepor os métodos que nela contém
class Mamifero extends Animal
{
    private $corPelo;

    function locomover()
    {
        echo "<p>Correndo</p>";
    }

    function alimentar()
    {
        echo "<p>Mamando</p>";
    }

    function emitirSom()
    {
        echo "<p>Som de Mamífero</p>";
    }

    public function getCorPelo()
    {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;
        return $this;
    }
}