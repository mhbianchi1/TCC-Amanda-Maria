<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Usuários</title>
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
                    <a href="index.html" class="logo"><strong>Cadastro de Usuário</strong></a>
                </header>

                <!--Form-->
                <div class="inner">
                    <form action="cadusuariobd.php" method="POST">

                        <div class="row gtr-uniform" style="margin-top: 20px;">
                            <div class="col-12">
                                <label>Nome</label>
                                <input type="text" name="nome" id="nome" value="" placeholder="Nome" />
                            </div>

                            <div class="col-6 col-12-xsmall">
                                <label>Nome de usuário (Apelido)</label>
                                <input type="text" name="username" id="username" value="" placeholder="Apelido" />
                            </div>

                            <div class="col-6 col-12-xsmall">
                                <label>Perfil de Usuário</label>
                                <select name="perfilusuario" id="perfilusuario" required>
                                    <option value="" selected disabled>- Selecione -</option>
                                    <?php
                                        $comandoSQL = "SELECT * FROM perfilusuario";
                                        $selecionados = $con->query($comandoSQL);
                                        while ($resultado = $selecionados->fetch(PDO::FETCH_ASSOC)) 
                                        { ?> <option value="<?php echo $resultado['CodPerfil']; ?>"><?php echo $resultado['DescricaoPerfil']; ?></option><?php } ?>
                                </select>
                            </div>

                            <div class="col-6 col-12-xsmall">
                                <label>Senha</label>
                                <input type="password" name="senha" id="senha" value="" placeholder="Senha" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label>Confirmação de Senha</label>
                                <input type="password" name="confirmarsenha" id="confirmarsenha" value="" placeholder="Confirme a senha" onblur="validarSenha('senha', 'confirmarsenha')" />
                            </div>



                            <div class="col-12">
                                <ul class="actions">
                                    <<li><button type="submit" class="button primary">Salvar</button></li>
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

<script type="text/javascript">
function validarSenha(name1, name2)
{
    var senha1 = document.getElementById(name1).value;
    var senha2 = document.getElementById(name2).value;
		
    if (!(senha1 != "" && senha2 != "" && senha1 === senha2))
    {
      	alert('Senhas não correspondem!');
    }
}

</script>

</html>