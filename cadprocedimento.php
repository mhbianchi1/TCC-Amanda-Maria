<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Usuários</title>
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
                    <a href="index.html" class="logo"><strong>Cadastro de Procedimento</strong></a>
                </header>

                <!--Form-->
                <div class="inner">
                    <form method="post" action="#">

                        <div class="row gtr-uniform" style="margin-top: 20px;">
                            <div class="col-8 col-12-xsmall">
                                <label>Nome do Procedimento</label>
                                <input type="text" name="Procedimento" id="demo-name" value="" placeholder="Procedimento" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label>Utiliza Aparelho?</label>
                                <form>
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <label for="vehicle1">Sim</label><br>
                                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                    <label for="vehicle2">Não</label><br>
                                </form>
                            </div>
                            <div class="col-4 col-12-xsmall">
                                <label>Tempo Estimado</label>
                                <input type="time" name="Endereço" id="Endereço" value="" placeholder="Rua:XXXXXXX, 555" />
                            </div>
                            <div class="col-12">

                                <ul class="actions">
                                    <li><a href="#" class="button primary">Salvar</a></li>
                                    <li><a href="#" class="button">Limpar</a></li>
                                    <li><a href="#" class="button">Cancelar</a></li>
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