<?php

abstract class Veiculo
{
    protected string $tipo;

    public function __construct(string $tipo)
    {
        $this->tipo = $tipo;
    }

    abstract function mover(): void;
}

class Carro extends Veiculo
{
    private string $marca;

    public function __construct(string $marca)
    {
        parent::__construct('Carro');
        $this->marca = $marca;
    }

    public function mover(): void
    {
        echo "O $this->tipo da marca $this->marca está se movendo.\n";
    }
}

$carro = new Carro("Toyota");
$carro->mover();
