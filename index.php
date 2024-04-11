<?php
include_once '../TesteBancoPostgres/DAO.php';
include_once '../TesteBancoPostgres/dbConnection.php';

$classeDao = new DAO;
$conexao = new dbConnection;

$conexao->conectarBanco("localhost", "5432", "posjava", "postgres", "admin");

?>
<!doctype html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD</title>
        <link rel="shortcut icon" href="./imagens/php.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="funcoes.js"></script>
        <script src="adicionarUsuarios.js"></script>
        <script src="deletarUsuarios.js"></script>
        <script src="alterarUsuarios.js"></script>
    </head>

    <body>
        <!--Nav-->
        <nav nav class="navbar" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./imagens/logoPessoas.png" alt="Logo" width="50" height="40" class="d-inline-block align-text-top">
                    Pessoas Cadastradas
                </a>
            </div>
        </nav>
        <br>
        <!--Tabela-->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $classeDao->buscar($conexao);
                ?>
            </tbody>
        </table>

        <!--Botoes-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <button type="button" class="btn btn-primary" id="btnInserir">Inserir</button>
                </div>
                <div class="col-auto">
                    <a type="button" class="btn btn-secondary" id="btnAtualizar" href="index.php">Atualizar</a>
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-warning" id="btnAlterar">Alterar</button>
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-danger" id="btnExcluir">Excluir</button>
                </div>

            </div>
        </div>

        <!--Inputs-->
        <div id="inputsContainer" style="display: none;">
            <br>
            <div class="input-group mb-3" id="divID">
                <span class="input-group-text" id="basic-addon1">id</span>
                <input type="text" class="form-control" placeholder="ID" aria-label="Id" aria-describedby="basic-addon1" id="inputId">
            </div>
            <div class="input-group mb-3" id="divNome">
                <span class="input-group-text" id="basic-addon2">Nome</span>
                <input type="text" class="form-control" placeholder="Digite seu nome" aria-label="Nome" aria-describedby="basic-addon2" id="inputName">
            </div>
            <div class="input-group mb-3" id="divEmail">
                <span class="input-group-text" id="basic-addon3">Email</span>
                <input type="text" class="form-control" placeholder="Digite seu email" aria-label="Email" aria-describedby="basic-addon3" id="inputEmail">
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <button type="button" class="btn btn-success" onclick="adicionarUsuarios()">Inserir</button>
                    <button type="button" class="btn btn-success" onclick="alterarUsuarios()">Alterar</button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="confirmarExclusaoModal" tabindex="-1" role="dialog" aria-labelledby="confirmarExclusaoModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmarExclusaoModalLabel">Confirmar Exclusão</h5>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja excluir este item?
                    </div>
                    <div class="input-group mb-3" id="idModal">
                        <span class="input-group-text" id="basic-addon1">ID</span>
                        <input type="text" class="form-control" id="inputIDModal" placeholder="Insira o ID" aria-label="ID-Modal" aria-describedby="basic-addon1">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btnConfirmarExclusao" onclick="deletarUsuarios()">Confirmar</button>
                        <p><a href="index.php" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Voltar</a></p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js" integrity="sha384-UO3KQ2YrM4tykc5Y5jvCI7CofSxXaoI6HupJpY8b8VS5Ii5N6D5J7kPsaI3z9zp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    </body>

</html>