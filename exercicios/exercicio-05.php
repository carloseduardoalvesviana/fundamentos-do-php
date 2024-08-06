<?php

abstract class Animal
{
    protected string $tipo;

    public function __construct(string $tipo)
    {
        $this->tipo = $tipo;
    }

    abstract function fazerSom(): void;
}

class Cachorro extends Animal
{
    protected string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        parent::__construct("Cachorro");
    }

    public function fazerSom(): void
    {
        echo "O " . $this->tipo . " " . $this->nome  .  " Faz: Uau uau \n";
    }
}

$cachorro = new Cachorro("Rex");
$cachorro->fazerSom();
