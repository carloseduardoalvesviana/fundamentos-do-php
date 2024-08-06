<?php

class VeiculoTerreste
{
    protected string $modelo;
    protected string $marca;

    public function __construct(string $modelo, string $marca)
    {
        $this->modelo = $modelo;
        $this->marca = $marca;
    }

    public function descrever(): void
    {
        echo "Ligando Veiculo";
    }
}

class Carro extends VeiculoTerreste
{
    public function descrever(): void
    {
        echo "Ligando Carro \n";
    }
}

class Motocicleta extends VeiculoTerreste
{
    public function descrever(): void
    {
        echo "Ligando Moto \n";
    }
}

$carro = new Carro("2024", "Toyota");
$carro->descrever();

$moto = new Motocicleta("2023", "Yamaha");
$moto->descrever();
