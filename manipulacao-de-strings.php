<?php 

/**
 * Manipulação de Strings
 */

# Concatenacao
$nome = "Carlos";
$sobreNome = "Alves Viana";
$nomeCompleto = $nome . " " . $sobreNome;
var_dump($nomeCompleto);

# Funções Comuns de Strings
# strlen(): Retorna o tamanho de uma string.
var_dump(strlen($nome));

# strtoupper() e strtolower(): Converte a string para maiúsculas ou minúsculas.
var_dump(strtoupper($nomeCompleto));
var_dump(strtolower($nomeCompleto));

# substr(): Retorna parte de uma string.
var_dump(substr($nomeCompleto, 0, 6));

# strpos(): Encontra a posição de uma substring dentro de outra string.
$frase = "Olá, como voce está?";
var_dump(strpos($frase, "como"));

# str_replace(): Substitui todas as ocorrências de uma substring por outra.
var_dump(str_replace("Carlos", "CARLOS" ,$nomeCompleto));

# explode(): Divide uma string em um array com base em um delimitador.
$data = "1997-19-11";
var_dump(explode("-", $data));

# implode(): Junta os elementos de um array em uma string.
$dataArray = ["1997", "19", "11"];
var_dump(implode("/", $dataArray));