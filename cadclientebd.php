<?php

require_once("conexao/conexao.php");

$nascimento = $_POST['nascimento'];

if (!filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING)) 
{
  echo "Informação inválida!";
} 
else 
{
  if (!filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING)) 
  {
    echo "Informação inválida!";
  } 
  else 
  {
    //Data
    if (!filter_input(INPUT_POST, "sexo", FILTER_SANITIZE_STRING)) 
    {
      echo "Informação inválida!";
    }
    else
    {
      if(!filter_input(INPUT_POST, "celular", FILTER_SANITIZE_STRING))
        {
          echo "Informação inválida!";
        }
        else
        {
          if(!filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_STRING))
          {
            echo "Data inválida!";	
          }
          else
          {
            if(!filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_STRING))
            {
              echo "Informação inválida!";
            }

            else
            {
              $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
              $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);
              $sexo = filter_input(INPUT_POST, "sexo", FILTER_SANITIZE_STRING);
              $celular = filter_input(INPUT_POST, "celular", FILTER_SANITIZE_STRING);
              $endereco = filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_STRING);
              $cidade = filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_STRING);

              $comandoSQL = $con->prepare("INSERT INTO clientes (NomeCliente, CPFCliente, NascimentoCliente, SexoCliente, CelularCliente, EnderecoCliente, CidadeCliente) 
                            VALUES (:nome, :cpf, :nascimento, :sexo, :celular, :endereco, :cidade)");

              $comandoSQL->execute(array(
                ':nome' => $nome,
                ':cpf' => $cpf,
                ':nascimento' => $nascimento,
                ':sexo' => $sexo,
                ':celular' => $celular,
                ':endereco' => $endereco,
                ':cidade' => $cidade
              ));
              

              if($comandoSQL->rowCount() > 0){
                header("location:relatorioclientes.php");
              }
              else{
                echo "Erro na inserção de novo cliente.";
              }

            }
          }
        }
    }
  }
}
