<?php
/**
 * Lançando e capturando um erro
 */
try {
    throw new Exception('Houve um erro.', 400);
} catch (Exception $exception) {
    echo json_encode(array(
        'mensagem' => $exception->getMessage(),
        'arquivo' => $exception->getFile(),
        'linha' => $exception->getLine(),
        'codigo' => $exception->getCode()
    ));
}