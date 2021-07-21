<?php

require_once("conexao/conexao.php");

$nascimento = $_POST['nascimento'];

if (!filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING)) {
    echo "Informação inválida!";
} else {
    if (!filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING)) {
        echo "Informação inválida!";
    } else {
        //Data
        if (!filter_input(INPUT_POST, "sexo", FILTER_SANITIZE_STRING)) {
            echo "Informação inválida!";
        } else {
            if (!filter_input(INPUT_POST, "celular", FILTER_SANITIZE_STRING)) {
                echo "Informação inválida!";
            } else {
                if (!filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_STRING)) {
                    echo "Data inválida!";
                } else {
                    if (!filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_STRING)) {
                        echo "Informação inválida!";
                    } else {
                        $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
                        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
                        $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);
                        $sexo = filter_input(INPUT_POST, "sexo", FILTER_SANITIZE_STRING);
                        $celular = filter_input(INPUT_POST, "celular", FILTER_SANITIZE_STRING);
                        $endereco = filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_STRING);
                        $cidade = filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_STRING);

                        $comandoSQL = $con->prepare("UPDATE clientes SET NomeCliente =:nome, CPFCliente = :cpf, NascimentoCliente = :nascimento, SexoCliente = :sexo, CelularCliente = :celular, EnderecoCliente = :endereco, CidadeCliente = :cidade WHERE CodCliente = :id");

                        $comandoSQL->execute(array(
                            ':id' => $id,
                            ':nome' => $nome,
                            ':cpf' => $cpf,
                            ':nascimento' => $nascimento,
                            ':sexo' => $sexo,
                            ':celular' => $celular,
                            ':endereco' => $endereco,
                            ':cidade' => $cidade
                        ));


                        if ($comandoSQL->rowCount() > 0) {
                            header("location:relatorioclientes.php");
                        } else {
                            echo "Erro na atualização de cliente.";
                        }
                    }
                }
            }
        }
    }
}
