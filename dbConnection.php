<?php
class dbConnection {
    private $conexao;

    function conectarBanco($servidor, $porta, $bancoDeDados, $usuario, $senha) {
        $this->conexao = pg_connect("host=$servidor port=$porta dbname=$bancoDeDados user=$usuario password=$senha");
        if (!$this->conexao) {
            printf('<div class="position-fixed bottom-0 end-0 p-1 bg-danger text-white border" style="max-width: 15rem;">
            Desconectado!</div>');
            die;
        } else {
            printf('<div class="position-fixed bottom-0 end-0 p-1 bg-success text-white border" style="max-width: 15rem;">
            Conectado!</div>');
        }
    }

    function getConexao() {
        return $this->conexao;
    }
}
?>
