<?php
/**
 * Configurando exibição de erros dentro do código PHP
 * Indicado para momentos em que não se pode alterar o arquivo de configuração php.ini.
 */

error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET['nome'];

echo $nome; // Acessar a url sem informar o parâmetro nome, gera um Notice, nesse caso não aparecerá