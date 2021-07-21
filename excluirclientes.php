<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Exclusão de Clientes</title>
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
                    <a href="index.html" class="logo"><strong>Exclusão de Cliente</strong></a>
                </header>

                <!--Form-->
                <div class="inner">
                    <!-- Formulário -->
                    <form action="excluirclientesbd.php" method="POST">

                        <?php
                        $id = $_GET["id"];

                        $comandoSQL = "SELECT * FROM clientes WHERE CodCliente = $id";

                        $selecionados = $con->query($comandoSQL);

                        $resultado = $selecionados->fetch(PDO::FETCH_ASSOC);

                        ?>

                        <input type="hidden" name="id" value="<?php echo $resultado["CodCliente"]; ?>">
                        <!--Para pegar o código do cliente-->

                        <div class="row gtr-uniform" style="margin-top: 20px;">
                            <div class="col-12 col-12-xsmall">
                                <label>Nome</label>
                                <input type="text" name="nome" id="nome" placeholder="Nome Completo" readonly value="<?php echo $resultado["NomeCliente"]; ?>" />
                            </div>

                            <div class="col-6 col-12-xsmall">
                                <label>CPF</label>
                                <input type="text" name="cpf" id="cpf" placeholder="CPF" readonly value="<?php echo $resultado["CPFCliente"]; ?>" />
                            </div>

                            <div class="col-6 col-12-xsmall" style="align-content: center;">
                                <label>Data de Nascimento</label>
                                <input type="text" name="nascimento" id="nascimento" readonly value="<?php echo $resultado["NascimentoCliente"]; ?>" />
                            </div>

                            <div class="col-6 col-12-xsmall">
                                <label>Sexo</label>
                                <select name="sexo" id="sexo"  required readonly> 
                                    <span>
                                        <<?php echo $resultado["SexoCliente"]; ?>>
                                    </span>
                                    <option value="" <?= ($resultado["SexoCliente"] == '') ? 'selected' : '' ?>>- Selecione -</option>
                                    <option value="1" <?= ($resultado["SexoCliente"] == '1') ? 'selected' : '' ?>>Feminino</option>
                                    <option value="2" <?= ($resultado["SexoCliente"] == '2') ? 'selected' : '' ?>>Masculino</option>
                                </select>
                            </div>

                            <div class="col-6 col-12-xsmall">
                                <label>Celular</label>
                                <input type="text" id="celular" name="celular" readonly value="<?php echo $resultado["CelularCliente"]; ?>" />
                            </div>


                            <div class="col-6 col-12-xsmall">
                                <label>Endereço</label>
                                <input type="text" name="endereco" id="endereco" placeholder="Rua: XXXXXXX, 555" readonly value="<?php echo $resultado["EnderecoCliente"]; ?>" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label>Cidade</label>
                                <input type="text" name="cidade" id="cidade" placeholder="Cidade" readonly value="<?php echo $resultado["CidadeCliente"]; ?>" />
                            </div>


                            <div class="col-12">
                                <ul class="actions">
                                    <li><button type="submit" class="button primary">Excluir</button></li>
                                    <li><a href="relatorioclientes.php" class="button">Cancelar</a></li>
                                </ul>
                            </div>



                        </div>
                    </form>
                </div>
                <!-- Fim do Form-->
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



</html>