<?php

class ContaBancaria
{
    // propriedade encapsulada, ou seja somente os metodos podem modifica-la
    private float $saldo;

    public function __construct(float $saldoInicial)
    {
        $this->saldo = $saldoInicial;
    }

    public function depositar(float $valorDeposito): void
    {
        if ($valorDeposito > 0) {
            $this->saldo += $valorDeposito;
        } else {
            echo "Só é possivel depositar valores acima de 0 \n";
        }
    }

    public function sacar(float $valorSaque): void
    {
        if ($valorSaque > 0 && $valorSaque <= $this->saldo) {
            $this->saldo -= $valorSaque;
        } else {
            echo "Saldo Insuficiente \n";
        }
    }

    public function obterSaldo(): float
    {
        return $this->saldo;
    }
}

$contaBancaria = new ContaBancaria(0);
$contaBancaria->depositar(0);
$saldoEmConta = $contaBancaria->obterSaldo();
echo "Saldo: $saldoEmConta \n";

$contaBancaria->depositar(55);
$saldoEmConta = $contaBancaria->obterSaldo();
echo "Saldo: $saldoEmConta \n";

$contaBancaria->sacar(100);
$saldoEmConta = $contaBancaria->obterSaldo();
echo "Saldo: $saldoEmConta \n";
