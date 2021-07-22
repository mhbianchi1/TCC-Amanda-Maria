<?php

require_once("conexao/conexao.php");



if (!filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING)) 
{
  echo "Informação inválida!";
} 
else 
{
  if (!filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING)) 
  {
    echo "Informação inválida!";
  } 
  else 
  {
    if (!filter_input(INPUT_POST, "perfilusuario", FILTER_SANITIZE_NUMBER_INT)) 
    {
      echo "Informação inválida!";
    }
    else
    {
      if(!filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING))
        {
          echo "Informação inválida!";
        }

            else
            {
              $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
              $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
              $perfilusuario = filter_input(INPUT_POST, "perfilusuario", FILTER_SANITIZE_NUMBER_INT);
              $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);
              

              $comandoSQL = $con->prepare("INSERT INTO usuarios (ApelidoUsuario, NomeUsuario, SenhaUsuario, Perfilusuario) 
                            VALUES (:username, :nome, :senha, :perfilusuario)");

              $comandoSQL->execute(array(
                ':username' => $username,
                ':nome' => $nome,
                ':senha' => $senha,
                ':perfilusuario' => $perfilusuario
                
                
              ));
              

              if($comandoSQL->rowCount() > 0){
                header("location:relatoriousuarios.php");
              }
              else{
                echo "Erro na inserção de novo usuário.";
              }

            }
          }
        }
    }
  

