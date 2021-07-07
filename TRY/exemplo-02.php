<?php
/**
 * Tratamento de erro
 */

function trataNome(string $nome)
{
    if (!$nome) {
        throw new Exception('Nenhum nome foi informado.', 1);
    }

    echo ucfirst($nome) . '<br>';
}

try {
    trataNome('Jean'); // Vai funcionar
    trataNome(''); // Vai lançar erro
} catch (Exception $exception) {
    echo json_encode(array(
        'mensagem' => $exception->getMessage(),
        'arquivo' => $exception->getFile(),
        'linha' => $exception->getLine(),
        'codigo' => $exception->getCode()
    ));
} finally {
    echo 'Conexão fechada.';
}