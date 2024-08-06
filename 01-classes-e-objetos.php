<?php

class Carro
{
    public string $marca;
    public string $modelo;

    public function __construct($marca, $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibirInformacoes(): void
    {
        echo "Marca: $this->marca, Modelo: $this->modelo \n";
    }

    public function ligarCarro(): void
    {
        echo "Ligando Carro \n";
    }

    public function desligarCarro(): void
    {
        echo "Desligando Carro \n";
    }
}

$carro = new Carro("Toyota", "Corolla");
$carro->exibirInformacoes();
$carro->ligarCarro();
