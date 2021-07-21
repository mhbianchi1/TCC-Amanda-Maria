<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Clientes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Main -->
        <div id="main">

            <div class="inner">
                <!-- Header -->
                <header id="header">
                    <a href="index.html" class="logo"><strong>Cadastro de Cliente</strong></a>
                </header>

                <!--Form-->
                <div class="inner">
                    <!-- Formulário -->
                    <form action="cadclientebd.php" method="POST">

                        <div class="row gtr-uniform" style="margin-top: 20px;">
                            <div class="col-12 col-12-xsmall">
                                <label>Nome</label>
                                <input type="text" name="nome" id="nome" value="" placeholder="Nome Completo" />
                            </div>

                            <div class="col-6 col-12-xsmall">
                                <label>CPF</label>
                                <input type="text" name="cpf" id="cpf" value="" placeholder="CPF" />
                            </div>

                            <div class="col-6 col-12-xsmall" style="align-content: center;">
                                <label>Data de Nascimento</label>
                                <input type="date" name="nascimento" id="nascimento" value="" placeholder="" />
                            </div>

                            <div class="col-6 col-12-xsmall">
                                <label>Sexo</label>
                                <select name="sexo" id="sexo">
                                    <option value="">- Selecione -</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                            </div>

                            <div class="col-6 col-12-xsmall">
                                <label>Celular</label>
                                <input type="text" id="celular" name="celular" />
                            </div>


                            <div class="col-6 col-12-xsmall">
                                <label>Endereço</label>
                                <input type="text" name="endereco" id="endereco" value="" placeholder="Rua: XXXXXXX, 555" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label>Cidade</label>
                                <input type="text" name="cidade" id="cidade" value="" placeholder="Cidade" />
                            </div>


                            <div class="col-12">
                                <ul class="actions">
                                    <li><button type="submit" class="button primary">Salvar</button></li>
                                    <li><button type="reset" class="button">Limpar</button></li>
                                    <li><a href="index.php" class="button">Cancelar</a></li>
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