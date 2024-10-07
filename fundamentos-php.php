<?php

// Exemplo Básico de sintaxe php
echo "Olá, Mundo!";

echo PHP_EOL . "--------------------------------------------------------------" . PHP_EOL;

/**
 * Tipos de dados
 * PHP suporta diverssos tipos de dados
 * Int, Float, String, Boolean, Arrays, Object, Null
 */

$idade = 26;
$preco = 99.99;
$nome = "Carlos";
$programador = true;
$frutas = ["Uva", "Goiaba", "Morango"];

class Carro1
{
    public $modelo;
    public function __construct($modelo)
    {
        $this->modelo = $modelo;
    }
}
$meuCarro = new Carro1("Fiato Uno");

$null = null;

var_dump($idade, $preco, $nome, $programador, $frutas, $meuCarro);

echo "--------------------------------------------------------------" . PHP_EOL;

/**
 * Operadores
 * PHP oferece operadores para realizar diversas operações
 * Atribuição: = += -=
 * Aritméticos: + - * / %
 * Comparacao: == != < > <= >= 
 * Lógicos: && ||
 */

$i = 10;
$i += 10; // $i = $i + 10;
$i -= 5; // $i = $i - 5; 
var_dump($i);
echo "--------------------------------------------------------------" . PHP_EOL;

$adicao = 8 + 8;
$subtracao = 9 - 6;
$multiplicacao = 8 * 8;
$divisao = 9 / 3;
$restoDaDivisao = 9 % 2;
var_dump($adicao, $subtracao, $multiplicacao, $divisao, $restoDaDivisao);

echo "--------------------------------------------------------------" . PHP_EOL;

$a = 10;
$b = 20;
$igual = $a == $b;
$diferente = $a != $b;
$menor = $a < $b;
$maior = $a > $b;
$menorOuIgual = $a <= $b;
$maiorOuIgual = $a >= $b;
$ou = ($a < $b || $a > $b);
$e = ($a < $b && $a > $b);
var_dump($igual, $diferente, $menor, $maior, $menorOuIgual, $maiorOuIgual, $ou, $e);

echo "--------------------------------------------------------------" . PHP_EOL;

/**
 * Estruturas de Controle de Fluxo
 * If/Else: Estruturas de decisão
 * Switch: Alternativa ao `if` para múltiplas condições
 * While: Loop que executa enquanto uma condição é verdadeira
 * For: Estrutura de loop com contador
 * Foreach: Iteração através de arrays
 */

$idade = 18;
if ($idade < 18) {
    echo "Menor de idade!" . PHP_EOL;
} else {
    echo "Maior de idade" . PHP_EOL;
}

$cor = "asds";

switch ($cor) {
    case "vermelho":
        echo "Cor Vermelho" . PHP_EOL;
        break;
    case "azul":
        echo "Cor azul" . PHP_EOL;
        break;
    default:
        echo "Cor padrao";
}

$contador = 0;
while ($contador <= 100) {
    echo "Contagem while: $contador" . PHP_EOL;
    $contador++;
}

for ($i = 0; $i <= 100; $i++) {
    echo "Contagem for: $i" . PHP_EOL;
}

$frutasDoDia = [
    "segunda" => "uva",
    "terca" => "maca",
    "quarta" => "pera",
    "quinta" => "melancia"
];
foreach ($frutasDoDia as $index => $frutaDoDia) {
    echo "Fruta da $index: $frutaDoDia" . PHP_EOL;
}

echo "--------------------------------------------------------------" . PHP_EOL;

/**
 * Funções
 * São blocos de código reutilizáveis. 
 * Você pode criar funções personalizadas ou usar funções embutidas
 */
function saudacoes(string $nome): string
{
    return "Seja Bem-vindo $nome";
}
echo saudacoes("carlos") . PHP_EOL;

function soma(int $param1, int $param2): int
{
    return $param1 + $param2;
}
echo soma(9, 9) . PHP_EOL;

function pegarTamanhoDaString($string): int
{
    return strlen($string);
}

echo pegarTamanhoDaString("carlos eduardo alves viana") . PHP_EOL;
