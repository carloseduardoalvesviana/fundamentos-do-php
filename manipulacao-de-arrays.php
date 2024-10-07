<?php

/**
 * Manipulação de Arrays
 * Arrays são uma estrutura de dados usada para armazenar múltiplos valores em uma única variável.
 * PHP oferece várias formas de trabalhar com arrays, como arrays indexados, associativos e multidimensionais.
 */

/**
 * Array Indexado
 * Um array indexado é aquele onde os elementos são acessados por índices numéricos, começando do índice 0.
 */
$frutas = array("uva", "manga", "pera"); // Cria um array com três frutas
print_r($frutas); // Exibe a estrutura e os valores do array

/**
 * Array Associativo
 * Arrays associativos permitem usar chaves (strings) para acessar os valores ao invés de índices numéricos.
 */
$idades = array("carlos" => 26, "joao" => 27, "pedro" => 28); // Associa nomes com idades
print_r($idades); // Exibe a estrutura e os valores do array associativo

/**
 * Array Multidimensional
 * Arrays multidimensionais são arrays que contêm outros arrays, formando uma matriz.
 * Isso permite armazenar conjuntos de dados mais complexos.
 */
$pessoas = array(
    array("nome" => "carlos", "idade" => 26), // Primeiro array representando uma pessoa
    array("nome" => "joao", "idade" => 27),   // Segundo array
    array("nome" => "pedro", "idade" => 28)   // Terceiro array
);
print_r($pessoas); // Exibe a estrutura de uma matriz de arrays

/**
 * Adicionar Itens a um Array
 * Você pode adicionar elementos a um array de diversas maneiras, incluindo usar a notação de colchetes ou funções como array_push().
 */
$notebooks = []; // Cria um array vazio
$notebooks[] = "Dell"; // Adiciona o elemento "Dell" no final do array
$notebooks[] = "HP"; // Adiciona "HP" no final do array
array_push($notebooks, "Asus"); // Adiciona "Asus" no final do array usando a função array_push()
print_r($notebooks); // Exibe os notebooks adicionados

/**
 * Remover Itens de um Array
 * PHP oferece funções como `unset()` para remover itens de um array em um índice específico, ou `array_pop()` para remover o último elemento.
 */
$exemplo = array("ex1", "ex2"); // Cria um array com dois exemplos
unset($exemplo[0]); // Remove o item no índice 0 (neste caso, "ex1")
array_pop($exemplo); // Remove o último item do array (neste caso, "ex2")
print_r($exemplo); // O array estará vazio após essas remoções

/**
 * Percorrendo Arrays
 * Você pode iterar sobre arrays com laços `foreach` ou `for`, acessando tanto as chaves quanto os valores.
 */
$arrayDeFrutas = ["uva", "maca", "goiaba"]; // Cria um array de frutas
// Usando foreach para percorrer o array
foreach ($arrayDeFrutas as $key => $value) {
    echo $key . ": " . $value . PHP_EOL; // Exibe o índice e o valor de cada item
}

// Usando for para percorrer o array com base no seu comprimento
for($i = 0; $i < count($arrayDeFrutas); $i++) {
    echo $i . ": " . $arrayDeFrutas[$i] . PHP_EOL; // Exibe o índice e o valor
}

/**
 * Funções Úteis para Manipulação de Arrays
 * PHP oferece várias funções nativas que facilitam a manipulação de arrays.
 */

/**
 * `count()`: Conta o número de elementos em um array.
 */
$arrayDeIdades = [1, 2, 3, 4, 5]; // Cria um array de idades
$total = count($arrayDeIdades); // Conta quantos itens existem no array
echo "Total de idades: $total" . PHP_EOL; // Exibe o total

/**
 * `array_merge()`: Combina dois ou mais arrays em um único array.
 */
$arrayDePessoas = array("carlos", "joao"); // Primeiro array de nomes
$arrayDePessoas2 = array("pedro", "marta"); // Segundo array de nomes
$arrayCombinado = array_merge($arrayDePessoas, $arrayDePessoas2); // Combina os dois arrays
print_r($arrayCombinado); // Exibe o array combinado

/**
 * `in_array()`: Verifica se um valor existe em um array.
 */
$marcas = ["gol", "peugeot", "citroen"]; // Cria um array de marcas
if (in_array("gol", $marcas)) { // Verifica se "gol" está no array
    echo "Gol está no array de marcas" . PHP_EOL; // Exibe uma mensagem se o valor for encontrado
}

/**
 * `explode()`: Converte uma string em um array, dividindo-a com base em um delimitador.
 */
$string = "alguma coisa qualquer"; // Cria uma string
$arrayDePalavras = explode(" ", $string); // Divide a string em um array, separando pelas palavras
print_r($arrayDePalavras); // Exibe o array resultante da divisão
