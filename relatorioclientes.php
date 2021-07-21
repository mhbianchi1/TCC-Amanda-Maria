<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Relação de Clientes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">
    <?php
    require_once("conexao/conexao.php");
    ?>

    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Main -->
        <div id="main">

            <div class="inner">
                <!-- Header -->
                <header id="header">
                    <a href="index.html" class="logo"><strong>Relação de Clientes</strong></a>
                </header>

                <div id="search" class="alt" style="margin-top: 30px;">
                    <form method="post" action="#">
                        <input type="text" name="filtro-nome" id="filtro-nome" placeholder="Pesquisar" />
                    </form>
                </div>


                <div class="table-wrapper">
                    <table id="tabela">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Celular</th>
                                <th>Excluir</th>
                                <th>Alterar</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $numLinhasPagina = 10;

                            if (isset($_GET["pagina"])) {
                                $pagina = $_GET["pagina"];
                                $pagina *= $numLinhasPagina;
                            } else {
                                $pagina = 0;
                            }


                            $comandoSQL = "SELECT * FROM clientes"; //traz todos os registros do banco de dados

                            //Comando Cell pega valor quebrado e arredonda para cima
                            $totalPaginas = ceil($con->query($comandoSQL)->rowCount() / $numLinhasPagina);

                            $comandoSQL = "SELECT * FROM clientes LIMIT $pagina, $numLinhasPagina";

                            $selecionados = $con->query($comandoSQL);

                            $resultado = $selecionados->fetchAll();

                            if ($resultado) {

                                foreach ($resultado as $linha) {


                            ?>

                                    <tr>
                                        <td><?php echo $linha["CodCliente"]; ?></td>
                                        <td><?php echo $linha["NomeCliente"]; ?></td>
                                        <td><?php echo $linha["CelularCliente"]; ?></td>
                                        <td><a href="excluirclientes.php?id=<?php echo $linha["CodCliente"]; ?>"><i class="fas fa-trash text-danger"></i></a></td>
                                        <td><a href="alterarcliente.php?id=<?php echo $linha["CodCliente"]; ?>"><i class="far fa-check-circle text-success"></i></a></td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo ("<div class='alert alert-danger' role='alert'> Não há registros cadastrados. </div>");
                            }
                            ?>
                        </tbody>
                    </table>

                    <ul class="pagination">

                        <?php
                        for ($i = 0; $i < $totalPaginas; $i++) {
                        ?>
                            <li><span class="page"><a href="relatorioClientes.php?pagina=<?php echo $i; ?>"><?php echo $i + 1; ?></a></span></li>
                        <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>
            <!--Fim da div Inner-->
        </div>
        <!--Fim da div Main-->

        <!--Menu-->
        <?php require_once("_menu.php"); ?>
        <!-- Fim do Menu-->

    </div>
    <!--Fim da div Wrapper-->
</body>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

<!--Script que realiza a pesquisa dinamica-->
<script type="text/javascript">
    window.onload = function() {

        var filtro = document.getElementById('filtro-nome'); //nome do campo que realiza a busca
        var tabela = document.getElementById('tabela'); //id da tabela a ser pesquisada
        filtro.onkeyup = function() {
            var nomeFiltro = filtro.value;
            for (var i = 1; i < tabela.rows.length; i++) {
                var conteudoCelula = tabela.rows[i].cells[0].innerText;
                var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
                tabela.rows[i].style.display = corresponde ? '' : 'none';
            }
        };
    }
</script>

</html>