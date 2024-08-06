<?php

class Animal
{
    protected string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function emitirSom(): void
    {
        echo "Emitindo Som \n";
    }
}

class Cachorro extends Animal
{
    // Automaticamente os metodos e atributos fazem parte da classe que herda de outra
    public function emitirSom(): void
    {
        echo "Uau Uau \n";
    }

    public function exibirNome(): void
    {
        echo "Meu nome é $this->nome \n";
    }
}

$cachorro = new Cachorro("Rex");
$cachorro->emitirSom();
$cachorro->exibirNome();
