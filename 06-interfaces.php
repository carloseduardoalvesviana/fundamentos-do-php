<?php

interface Imprimivel
{
    public function imprimir(): void;
}

class Relatorio implements Imprimivel
{
    public function imprimir(): void
    {
        echo "Imprimindo Relatorio \n";
    }
}

class PDF implements Imprimivel
{
    public function imprimir(): void
    {
        echo "Imprimindo PDF \n";
    }
}

$relatorio = new Relatorio();
$relatorio->imprimir();

function imprimir(Imprimivel $imprimivel)
{
    $imprimivel->imprimir();
}

$pdf = new PDF();

imprimir($pdf);
