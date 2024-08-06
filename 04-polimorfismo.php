<?php

class FormaGeometrica
{
    public function desenhar(): void
    {
        echo "Desenhando Forma Geometrica \n";
    }
}

class Quadrado extends FormaGeometrica
{
    public function desenhar(): void
    {
        echo "Desenhando Quadrado \n";
    }
}

class Circulo extends FormaGeometrica
{
    public function desenhar(): void
    {
        echo "Desenhando Circulo \n";
    }
}

function desenharForma(FormaGeometrica $forma): void
{
    $forma->desenhar();
}

$circulo = new Circulo();
$quadrado = new Quadrado();

desenharForma($circulo);
desenharForma($quadrado);
