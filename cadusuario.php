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
                    <a href="index.html" class="logo"><strong>Cadastro de Usuário</strong></a>
                </header>

                <!--Form-->
                <div class="inner">
                    <form method="post" action="#">

                        <div class="row gtr-uniform" style="margin-top: 20px;">
                            <div class="col-12">
                                <label>Nome</label>
                                <input type="text" name="nome" id="demo-name" value="" placeholder="Nome" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label>Senha</label>
                                <input type="password" name="senha" id="senha" value="" placeholder="Senha" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label>Confirmação de Senha</label>
                                <input type="password" name="confirmarsenha" id="confirmarsenha" value="" placeholder="Confirme a senha" />
                            </div>

                            <div class="col-12">
                                <label>Perfil de Usuário</label>
                                <select name="perfilusuario" id="perfilusuario">
                                    <option value="">- Selecione -</option>
                                    <option value="1">Administrador</option>
                                    <option value="1">Caixa</option>
                                    <option value="1">Esteticista</option>
                                    <option value="1">Secretária</option>
                                </select>
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