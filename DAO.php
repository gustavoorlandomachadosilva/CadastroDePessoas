<?php
    include_once '../CRUD/dbConnection.php';
    
    class DAO {
        //CREATE
        function inserir($conexao, $id, $nome, $email) {
            $con = $conexao->getConexao(); // Obter a conexão do objeto dbConnection
            $consulta = pg_query($con, "INSERT INTO userposjava(id, nome, email) VALUES ($id, '$nome', '$email')");
            
            if ($consulta) {
                echo "<br>Inserção realizada com sucesso!";
            } else {
                echo "<br>Erro ao inserir dados: " . pg_last_error($con);
            }
        }

        //READ
        function buscar($conexao) {
            // Obter a conexão do objeto dbConnection
            $con = $conexao->getConexao();    
            // Executar a consulta
            $consulta = pg_query($con, "SELECT id, nome, email FROM userposjava ORDER BY id ASC");
            
            if ($consulta) {
                // Verifica se há resultados
                if (pg_num_rows($consulta) > 0) {
                    // Loop através dos resultados e adicione-os à tabela
                    while ($linha = pg_fetch_assoc($consulta)) {
                        echo "<tr>";
                        echo "<td>{$linha['id']}</td>";
                        echo "<td>{$linha['nome']}</td>";
                        echo "<td>{$linha['email']}</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Nenhum resultado encontrado.</td></tr>";
                }
            } else {
                echo "Erro ao executar consulta: " . pg_last_error($con);
            }
            
        }
        
        //UPDATE
        function atualizar($conexao, $id, $nome, $email) {
            $con = $conexao->getConexao(); // Obter a conexão do objeto dbConnection antes de executar a consulta
            
            // Verifica se o ID existe antes de tentar atualizar
            $consultaVerificar = pg_query($con, "SELECT id FROM userposjava WHERE id = $id");
            
            if (pg_num_rows($consultaVerificar) > 0) {
                // O ID existe, então prosseguimos com a atualização
                $consulta = pg_query($con, "UPDATE userposjava SET nome = '$nome', email = '$email' WHERE id = $id");
                if ($consulta) {
                    echo "<br>Atualização feita com sucesso!";
                } else {
                    echo "<br>Erro ao atualizar dados: " . pg_last_error($con);
                }
            } else {
                // O ID não existe, exibe uma mensagem de erro
                echo "<br>ID não encontrado no banco de dados.";
            }
        }

        //DELETE
        function deletar($conexao, $id) {
            $con = $conexao->getConexao();
            
            // Verifica se o ID existe antes de tentar deletar
            $consultaVerificar = pg_query($con, "SELECT id FROM userposjava WHERE id = $id");
            
            if (pg_num_rows($consultaVerificar) > 0) {
                // O ID existe, então prosseguimos com a remoção
                $consultaRemover = pg_query($con, "DELETE FROM userposjava WHERE id = $id");
                if ($consultaRemover) {
                    echo "<br>Remoção feita com sucesso!";
                } else {
                    echo "<br>Erro ao remover dados: " . pg_last_error($con);
                }
            } else {
                // O ID não existe, exibe uma mensagem de erro
                echo "<br>ID não encontrado no banco de dados.";
            }
        }
    
    }
?>
