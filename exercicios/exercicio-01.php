<?php

class Produto
{
    protected string $nome;
    protected float $preco;
    protected int $quantidade;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setQuantidade(int $quantidae): void
    {
        $this->quantidade = $quantidae;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function calcularValorTotalDoEstoque(): float
    {
        return $this->getPreco() * $this->getQuantidade();
    }

    public function exibirMensagemFormatadaSobreProduto(): void
    {
        $quantidade = $this->getQuantidade();
        $nomeProduto = $this->getNome();
        $valorTotal = $this->calcularValorTotalDoEstoque();

        echo "O Produto $nomeProduto tem $quantidade como quantidade, e no total tem $valorTotal \n";
    }
}


$arroz = new Produto("Arroz");
$arroz->setPreco(6.89);
$arroz->setQuantidade(200);
$arroz->exibirMensagemFormatadaSobreProduto();
