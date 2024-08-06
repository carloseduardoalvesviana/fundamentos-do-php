<?php

class Pagamento
{
    private float $valor;
    private string $recebedor;
    private string $pagador;

    public function __construct($valor, $recebedor, $pagador)
    {
        $this->valor = $valor;
        $this->recebedor = $recebedor;
        $this->pagador = $pagador;
    }

    public function processar(): void
    {
        echo "Processando Pagamento";
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function getRecebedor(): string
    {
        return $this->recebedor;
    }

    public function getPagador(): string
    {
        return $this->pagador;
    }
}

class PagamentoBoleto extends Pagamento
{
    public function processar(): void
    {
        $valorPagamento = $this->getValor();
        $pagador = $this->getPagador();
        $recebedor = $this->getRecebedor();
        echo "Processando Pagamento via boleto, $pagador Transferiu $valorPagamento Para $recebedor \n";
    }
}

class PagamentoPix extends Pagamento
{
    public function processar(): void
    {
        $valorPagamento = $this->getValor();
        $pagador = $this->getPagador();
        $recebedor = $this->getRecebedor();
        echo "Processando Pagamento via pix, $pagador Transferiu $valorPagamento Para $recebedor \n";
    }
}

function processarPagamento(Pagamento $formaPagamento)
{
    $formaPagamento->processar();
}

$boleto = new PagamentoBoleto(4000, "Carlos Viana", "Luila");
$pix = new PagamentoPix(5000, "Carlos Eduardo", "Ana");

processarPagamento($boleto);
processarPagamento($pix);

// O método pode se comportar de diferentes maneiras com base no tipo de pagamento.
