<?php

/**
 * PHP tem funções embutidas para lidar com erros, como trigger_error(), set_error_handler(), entre outras.
 */
function customErrorHandler($errNo, $errorStr, $errFile, $errLine) {
    var_dump($errNo, $errorStr, $errFile, $errLine);
}

set_error_handler("customErrorHandler");

echo $value; // Vai gerar um aviso pois a variável $value não está definida

/**
 * As exceções são uma maneira mais estruturada de lidar com erros em PHP, especialmente em aplicações orientadas a objetos.
 * As exceções são lançadas quando algo dá errado e podem ser capturadas para tratar o erro de maneira adequada.
 */
class CustomException extends Exception {}

try {
    throw new CustomException("Exceção customizada");
} catch (CustomException $th) {
    // Aqui tratamos a exceção específica da classe CustomException
    echo "Minha Exceção: " . $th->getMessage();
}

/**
 * Bloco Finally
 * O bloco "finally" será sempre executado, quer uma exceção seja lançada ou não.
 */
try {
    throw new Exception("Algo deu errado");
} catch (Exception $th) {
    echo $th->getMessage(); // Exibe a mensagem de exceção
} finally {
    echo "Este bloco será sempre executado"; // Este bloco é sempre executado, independente de exceção
}

/**
 * Você pode criar suas próprias classes de exceção herdando da classe Exception.
 * No exemplo abaixo, criamos uma exceção para tratar divisões por zero.
 */
class DivisaoPorZeroException extends Exception {}

function dividir(float $value1, float $value2): float
{
    if ($value2 == 0) {
        throw new DivisaoPorZeroException("Não é possível dividir por zero");
    }
    return $value1 / $value2;
}

try {
    echo dividir(4, 0); // Tentativa de dividir por zero
} catch (DivisaoPorZeroException $e) {
    // Tratamento da exceção específica de divisão por zero
    echo "Erro: " . $e->getMessage();
} catch (Throwable $e) {
    // Tratamento de qualquer outra exceção que possa ocorrer
    echo "Erro inesperado: " . $e->getMessage();
}
