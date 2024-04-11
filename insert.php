<?php
include_once '../CRUD/dbConnection.php'; // Inclui o arquivo que contém a definição da classe dbConnection
include_once '../CRUD/DAO.php'; // Inclui o arquivo que contém a definição da classe DAO

$conexao = new dbConnection;
$conexao->conectarBanco("localhost", "5432", "posjava", "postgres", "admin");

extract($_POST);

if (isset($idSend) && isset($nameSend) && isset($emailSend)) {
    $classeDao = new DAO;
    $classeDao->inserir($conexao, $idSend, $nameSend, $emailSend);
} else {
    echo "Todos os campos são obrigatórios.";
}
?>
