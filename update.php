<?php
include_once '../TesteBancoPostgres/dbConnection.php'; // Inclui o arquivo que contém a definição da classe dbConnection
include_once '../TesteBancoPostgres/DAO.php'; // Inclui o arquivo que contém a definição da classe DAO

$conexao = new dbConnection;
$conexao->conectarBanco("localhost", "5432", "posjava", "postgres", "admin");

extract($_POST);

if (isset($idSend) && isset($nameSend) && isset($emailSend)) {
    $classeDao = new DAO;
    $classeDao->atualizar($conexao,$idSend,$nameSend,$emailSend);
} else {
    echo "Todos os campos são obrigatórios.";
}
?>
