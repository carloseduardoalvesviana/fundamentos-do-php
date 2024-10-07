<?php 

/**
 * PHP tem funções embutidas para lidar com erros, como trigger_error(), set_error_handler(), entre outras.
 */
function customErrorHandler($errNo, $errorStr, $errFile, $errLine) {
    var_dump($errNo, $errorStr, $errFile, $errLine);
}

set_error_handler("customErrorHandler");

echo $value;

/**
 * As exceções são uma maneira mais estruturada de lidar com erros em PHP, especialmente em aplicações orientadas a objetos. 
 * As exceções são lançadas quando algo dá errado e podem ser capturadas para tratar o erro de maneira adequada.
 */
class CustomException extends Exception {}
try {
    throw new CustomException("Excecao customizada");
} catch (CustomException $th) {
    // throw $th;
    echo "Minha Excecao: " . $th->getMessage();
}

/**
 * Você pode capturar uma exceção e lançar outra, criando um encadeamento de exceções.
 */
class OutraExcecao1 extends Exception{}
class OutraExcecao2 extends Exception{}

try {
    try {
        throw new OutraExcecao1("Primeira Exception");
    } catch (OutraExcecao1 $th) {
        throw new OutraExcecao2("Segunda excecao", 0, $th);
    }
} catch (OutraExcecao2 $th) {
    echo $th->getMessage();
    echo $th->getPrevious()->getMessage();
}

/**
 * Finally
 */
try {
    throw new Exception("Deu ruim dmais");
} catch (Exception $th) {
    echo $th->getMessage();
} finally {
    echo "Sempre vai ser executado";
}

/**
 * Você pode criar suas próprias classes de exceção herdando da classe Exception.
 */
class DivisaoPorZeroException extends Exception {}

function dividir(float $value1, float $value2): Exception|float
{
    if($value2 == 0)
    {
        throw new DivisaoPorZeroException("Nao é possivel dividir por zero");
    }
    return $value1 / $value2;
}

try {
   echo dividir(4, 0);
} catch (DivisionByZeroError) {
    throw $th;
}