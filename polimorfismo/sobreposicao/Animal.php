<?php

abstract class Animal
{
    /*A classe animal, por ser abstrata, não pode implementar nenhum objeto - não pode ter nenhum objeto
    da classe Animal
    O "protected" dará acesso ao pesado, idade e membro para as classes filhas*/
    protected $peso;
    protected $idade;
    protected $membros;

    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    public function getMembros()
    {
        return $this->membros;
    }

    public function setMembros($membros)
    {
        $this->membros = $membros;
        return $this;
    }
}
