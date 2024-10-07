<?php 

/**
 * Manipulação de Arrays
 */

/**
 * Manipulação de Arrays
 * os arrays são uma estrutura de dados poderosa usada para armazenar múltiplos valores. 
 * Existem diferentes tipos de arrays, como arrays indexados, associativos e multidimensionais.
 */

# Array Indexado
$frutas = array("uva", "manga", "pera");
print_r($frutas);

# Array associativo
$idades = array("carlos" => 26, "joao" => 27, "pedro" => 28);
print_r($idades);

# Array multidimencional
$pessoas = array(
    array("nome" => "carlos", "idade" => 26),
    array("nome" => "joao", "idade" => 27),
    array("nome" => "pedro", "idade" => 28)
);
print_r($pessoas);

# Adicionar items no array
$notebooks = [];
$notebooks[] = "Dell";
$notebooks[] = "HP";
array_push($notebooks, "Asus");
print_r($notebooks);

# Remover items do array
$exemplo = array("ex1", "ex2");
unset($exemplo[0]);
array_pop($exemplo);
print_r($exemplo);

# Percorrer array
$arrayDeFrutas = ["uva", "maca", "goiaba"];
foreach ($arrayDeFrutas as $key => $value) {
    echo $key . ": " . $value . PHP_EOL;
}

for($i = 0; $i < count($arrayDeFrutas); $i++)
{
    echo $i . ": " . $arrayDeFrutas[$i] . PHP_EOL;
}

# Funções
# count: conta o numero de elementos no array
$arrayDeIdades = [1,2,3,4,5];
$total = count($arrayDeIdades);

# array_merge: combina um ou mais arrays
$arrayDePessoas = array("carlos", "joao");
$arrayDePessoas2 = array("pedro", "marta");
$arrayCombinado = array_merge($arrayDePessoas, $arrayDePessoas2);
print_r($arrayCombinado);

# in_array: verifica se um valor existe no array
$marcas = ["gol", "pegeot", "citroen"];
if(in_array("gol", $marcas)) {
    echo "Gol está no array de marcas";
}

# explode: converte uma string em um array
$string = "alguma coisa qualquer";
print_r(explode(" ", $string));