<?php
include_once '../TesteBancoPostgres/dbConnection.php'; // Inclui o arquivo que contém a definição da classe dbConnection
include_once '../TesteBancoPostgres/DAO.php'; // Inclui o arquivo que contém a definição da classe DAO

$conexao = new dbConnection;
$conexao->conectarBanco("localhost", "5432", "posjava", "postgres", "admin");

extract($_POST);

if (isset($dataSend)) {
    $classeDao = new DAO;
    $classeDao->deletar($conexao,$dataSend);
} else {
    echo "Erro ao Deletar";
}
?>
