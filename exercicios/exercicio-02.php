<?php

class Conta
{
    private float $saldo;
    private int $numeroDaConta;

    public function __construct(float $saldo = 0)
    {
        $this->saldo = $saldo;
        $this->numeroDaConta = rand(0, 199999);
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getNumeroDaConta(): int
    {
        return $this->numeroDaConta;
    }

    public function depositar(float $novoSaldo): void
    {
        if ($novoSaldo > 0) {
            $this->saldo += $novoSaldo;
        } else {
            echo "O valor depositado é inválido! \n";
        }
    }

    public function sacar(float $saque): void
    {
        if ($saque > 0 && $saque <= $this->getSaldo()) {
            $this->saldo -= $saque;
        } else {
            echo "O valor requerido para saque é inválido! \n";
        }
    }
}

class Inter extends Conta
{
}

$contaInter = new Inter();
$contaInter->depositar(10);
echo $contaInter->getSaldo() . "\n";
$contaInter->sacar(100);
echo $contaInter->getSaldo() . "\n";
