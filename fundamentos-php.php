<?php

// Exemplo básico de sintaxe PHP
// A função `echo` é usada para exibir uma mensagem na tela.
echo "Olá, Mundo!" . PHP_EOL; // Exibe "Olá, Mundo!" seguido de uma nova linha


/**
 * Tipos de dados
 * PHP suporta diversos tipos de dados que podem ser usados para armazenar e manipular informações.
 * Aqui estão alguns exemplos comuns:
 * - Int: números inteiros
 * - Float: números decimais
 * - String: cadeias de texto
 * - Boolean: valores verdadeiros ou falsos
 * - Arrays: coleções de dados
 * - Object: instâncias de classes
 * - Null: uma variável sem valor
 */

$idade = 26; // Um número inteiro (int)
$preco = 99.99; // Um número decimal (float)
$nome = "Carlos"; // Uma cadeia de texto (string)
$programador = true; // Um valor booleano (true ou false)
$frutas = ["Uva", "Goiaba", "Morango"]; // Um array (lista) de strings

// Criando uma classe chamada Carro
class Carro
{
    public $modelo;

    // O método construtor é chamado automaticamente quando um objeto é criado
    public function __construct($modelo)
    {
        $this->modelo = $modelo;
    }
}

// Instanciando um objeto da classe Carro
$meuCarro = new Carro("Fiat Uno");

$nulo = null; // Uma variável sem valor (null)

// A função `var_dump` exibe informações sobre as variáveis, incluindo seus tipos e valores.
var_dump($idade, $preco, $nome, $programador, $frutas, $meuCarro);


/**
 * Operadores
 * Operadores em PHP permitem a realização de operações sobre variáveis e valores.
 * Aqui estão alguns tipos:
 * - Atribuição: atribui valores a variáveis (ex: =, +=, -=)
 * - Aritméticos: realizam operações matemáticas (ex: +, -, *, /, %)
 * - Comparação: comparam dois valores (ex: ==, !=, <, >, <=, >=)
 * - Lógicos: combinam condições (ex: &&, ||)
 */

$i = 10;
$i += 10; // Incrementa o valor de $i em 10 ($i = $i + 10)
$i -= 5;  // Decrementa o valor de $i em 5 ($i = $i - 5)
var_dump($i); // Exibe o valor atual de $i

$adicao = 8 + 8; // Soma
$subtracao = 9 - 6; // Subtração
$multiplicacao = 8 * 8; // Multiplicação
$divisao = 9 / 3; // Divisão
$restoDaDivisao = 9 % 2; // Resto da divisão (módulo)
var_dump($adicao, $subtracao, $multiplicacao, $divisao, $restoDaDivisao); // Exibe os resultados das operações


// Operadores de comparação e lógicos
$a = 10;
$b = 20;
$igual = $a == $b; // Verifica se $a é igual a $b
$diferente = $a != $b; // Verifica se $a é diferente de $b
$menor = $a < $b; // Verifica se $a é menor que $b
$maior = $a > $b; // Verifica se $a é maior que $b
$menorOuIgual = $a <= $b; // Verifica se $a é menor ou igual a $b
$maiorOuIgual = $a >= $b; // Verifica se $a é maior ou igual a $b
$ou = ($a < $b || $a > $b); // Verifica se uma das condições é verdadeira (OU lógico)
$e = ($a < $b && $a > $b); // Verifica se ambas as condições são verdadeiras (E lógico)
var_dump($igual, $diferente, $menor, $maior, $menorOuIgual, $maiorOuIgual, $ou, $e); // Exibe os resultados das comparações


/**
 * Estruturas de Controle de Fluxo
 * Essas estruturas permitem que você controle o fluxo do programa com base em condições e loops.
 * - If/Else: executa diferentes blocos de código com base em uma condição.
 * - Switch: alternativa ao `if`, usado para múltiplas condições.
 * - While: repete um bloco de código enquanto uma condição for verdadeira.
 * - For: repete um bloco de código um número específico de vezes.
 * - Foreach: usado para iterar sobre arrays.
 */

// Estrutura condicional `if/else`
$idade = 18;
if ($idade < 18) {
    echo "Menor de idade!" . PHP_EOL;
} else {
    echo "Maior de idade!" . PHP_EOL; // Esta linha será exibida porque $idade é igual a 18
}

// Estrutura condicional `switch`
$cor = "vermelho";
switch ($cor) {
    case "vermelho":
        echo "Cor Vermelha" . PHP_EOL; // Executa este bloco porque $cor é "vermelho"
        break;
    case "azul":
        echo "Cor Azul" . PHP_EOL;
        break;
    default:
        echo "Cor padrão" . PHP_EOL; // Executado se nenhuma das opções anteriores for atendida
}

// Estrutura de loop `while`
$contador = 0;
while ($contador <= 5) { // Executa enquanto $contador for menor ou igual a 5
    echo "Contagem while: $contador" . PHP_EOL;
    $contador++; // Incrementa o contador a cada iteração
}

// Estrutura de loop `for`
for ($i = 0; $i <= 5; $i++) { // Executa um número fixo de vezes
    echo "Contagem for: $i" . PHP_EOL;
}

// Estrutura de loop `foreach`
$frutasDoDia = [
    "segunda" => "Uva",
    "terca" => "Maçã",
    "quarta" => "Pera",
    "quinta" => "Melancia"
];
foreach ($frutasDoDia as $dia => $fruta) { // Itera sobre o array associativo
    echo "Fruta de $dia: $fruta" . PHP_EOL; // Exibe o dia e a fruta correspondente
}

/**
 * Funções
 * Funções são blocos de código reutilizáveis que realizam tarefas específicas.
 * Você pode criar suas próprias funções ou usar as funções embutidas do PHP.
 */

// Função que retorna uma saudação personalizada
function saudacoes(string $nome): string
{
    return "Seja bem-vindo, $nome!"; // Retorna uma saudação com o nome fornecido
}
echo saudacoes("Carlos") . PHP_EOL; // Chama a função e exibe a saudação

// Função que soma dois números inteiros
function soma(int $num1, int $num2): int
{
    return $num1 + $num2; // Retorna a soma de dois números
}
echo soma(9, 9) . PHP_EOL; // Chama a função e exibe o resultado

// Função que retorna o tamanho de uma string
function pegarTamanhoDaString(string $texto): int
{
    return strlen($texto); // Usa a função embutida strlen para obter o comprimento da string
}

echo pegarTamanhoDaString("Carlos Eduardo Alves Viana") . PHP_EOL; // Exibe o tamanho da string fornecida