<?php

require_once("conexao/conexao.php");

$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);

$comandoSQL = $con->prepare("DELETE FROM clientes WHERE CodCliente = :id");

$comandoSQL->bindParam(':id', $id);

$comandoSQL->execute();

if ($comandoSQL->rowCount() > 0) {
    header("location:relatorioclientes.php");
} else {
    echo "Erro na exclusão do registro.";
}

?>
