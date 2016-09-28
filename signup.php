<html>

<head>
    <!--Importações do jQuery-->
    <script src="./js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="./js/jquery-ui.js"></script>
    <link rel="stylesheet" href="./css/jquery-ui.css">
    <script src="./js/mask-plugin.js"></script>

    <!--Importações do bootstrap-->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
    <script src="./js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./css/bootstrap-select.min.css">
    <script src="./js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/i18n/defaults-*.min.js"></script>

    <!--Importações internas-->
    <link rel="icon" href="imagens/icone.png">
    <script src="./js/form-mask.js"></script>
    <script src="./js/ui.js"></script>

</head>

<body>
    <div class="container-fluid">
        <form class="form-inline col-md-6 col-md-offset-3" method="POST" action="">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" placeholder="Digite seu nome" />
                <label for="lastname">Sobrenome</label>
                <input type="text" class="form-control" placeholder="Digite seu sobrenome" />
            </div>

            <div class="form-group">
                <label for="birthday">Data de nascimento</label>
                <input type="text" class="form-control" id="datepicker" placeholder="" />

                <label for="cep">CEP</label>
                <input type="text" class="form-control cep" placeholder="Digite seu CEP" />
            </div>
        </form>
    </div>
</body>

</html>