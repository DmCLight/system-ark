<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>



    <!--Importações do jQuery-->
    <script src="./js/jquery-3.1.1.min.js" type="text/javascript"></script>

    <!--Importações do bootstrap-->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
    <script src="./js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./css/bootstrap-select.min.css">
    <script src="./js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/i18n/defaults-*.min.js"></script>

    <!--Importações internas-->
    <link rel="icon" href="imagens/icone.png">
    <link rel="stylesheet" type="text/css" href="./css/index.css">

</head>

<body>

    <div class="container">
        <div class="icon-1">
            <img src="imagens/icone.png" width="250px" alt="">
        </div>
        <form class="form-horizontal col-md-4 col-md-offset-4" method="POST" action="./php/loginForm.php">
            <div class="form-group titulo">
                <p class="text-center format-text-titulo titulo">Centro de controle</p>
            </div>
            <div class="form-group">
                <label class="col-md-2 format-text">Usuário</label>
                <div class="col-md-10">
                    <input type="text" name="userLogin" placeholder="Digite o usuário" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 format-text">Senha</label>
                <div class="col-md-10">
                    <input type="password" maxlength="16" name="userPassword" placeholder="Digite a senha" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input type="submit" name="submitLoginInfo" value="Entrar" class="btn" />
                    <input type="button" value="Trocar a senha" class="btn" />
                    <select class="selectpicker" data-live-search="true" data-width="48.25%" name="userLevel">
						<optgroup>
							<option value = "1">Coordenador(a) Geral</option>
							<option value = "2">Coordenador(a)</option>
							<option value = "3">Monitor(a)</option>
							<option value = "4">Professor(a)</option>
							<option value = "5">Aluno(a)</option>
						</optgroup>
					</select>
                </div>
            </div>
        </form>

        <div class="footer-menu">
            <div class="btn-group  footer-btn">
                <a class="btn btn-a" role="button">Termos de uso</a>
                <a class="btn btn-a" role="button">Desenvolvedor</a>
                <a class="btn btn-a" role="button">Contato      </a>
            </div>
        </div>
    </div>
</body>

</html>