<?php

/**
 * Manipulação de Strings
 * Strings são uma sequência de caracteres e uma das estruturas de dados mais comuns.
 * PHP oferece diversas funções úteis para manipulação de strings, como concatenação, busca, substituição e mais.
 */

/**
 * Concatenacao
 * A concatenação de strings é o processo de unir duas ou mais strings em uma única.
 * Em PHP, o operador `.` é usado para concatenar strings.
 */
$primeiroNome = "João"; // String com o primeiro nome
$sobrenome = "Silva"; // String com o sobrenome
$nomeCompleto = $primeiroNome . " " . $sobrenome; // Concatena o nome e sobrenome com um espaço entre eles
var_dump($nomeCompleto); // Exibe a string concatenada: "João Silva"

/**
 * Funções Comuns de Strings
 * PHP possui várias funções internas para trabalhar com strings. Vamos explorar algumas delas.
 */

/**
 * `strlen()`: Retorna o tamanho de uma string (número de caracteres).
 */
var_dump(strlen($primeiroNome)); // Exibe o comprimento da string "João", que é 4.

/**
 * `strtoupper()` e `strtolower()`: Convertem uma string para maiúsculas e minúsculas, respectivamente.
 */
var_dump(strtoupper($nomeCompleto)); // Converte a string "João Silva" para "JOÃO SILVA"
var_dump(strtolower($nomeCompleto)); // Converte a string para "joão silva"

/**
 * `substr()`: Retorna uma parte de uma string, a partir de uma posição inicial até um determinado comprimento.
 * Parâmetros: (string, início, comprimento)
 */
var_dump(substr($nomeCompleto, 0, 4)); // Extrai os primeiros 4 caracteres de "João Silva", retornando "João"

/**
 * `strpos()`: Encontra a posição de uma substring dentro de outra string.
 * Se a substring for encontrada, a função retorna a posição (índice) onde a substring começa.
 * Caso contrário, retorna `false`.
 */
$frase = "Bom dia, como você está?"; // String com uma frase
var_dump(strpos($frase, "como")); // Retorna 9, que é a posição onde "como" começa na frase

/**
 * `str_replace()`: Substitui todas as ocorrências de uma substring por outra dentro de uma string.
 * Parâmetros: (substring a ser substituída, nova substring, string original)
 */
var_dump(str_replace("João", "JOSÉ", $nomeCompleto)); // Substitui "João" por "JOSÉ" em "João Silva"

/**
 * `explode()`: Divide uma string em um array com base em um delimitador.
 * Parâmetros: (delimitador, string)
 */
$data = "2000-12-25"; // Data no formato "ano-mês-dia"
var_dump(explode("-", $data)); // Divide a string "2000-12-25" em um array ["2000", "12", "25"]

/**
 * `implode()`: Junta os elementos de um array em uma string, usando um delimitador.
 * Parâmetros: (delimitador, array)
 */
$dataArray = ["2000", "12", "25"]; // Array contendo partes de uma data
var_dump(implode("/", $dataArray)); // Junta os elementos do array em uma string "2000/12/25"
