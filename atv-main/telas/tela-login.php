<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../style-login.css">
    <link rel="stylesheet" href="../style-navbar.css">
    <title>SempreAqui - Login</title>
</head>

<body>
    <nav>
        <ul class="menu">
            <li><a href="tela-home.php">Home</a></li>
            <li><a href="">Vagas</a></li>
            <li><a href="">Sobre</a></li>
            <li><a href="tela-login.php" id="login-op">Login</a></li>
        </ul>
    </nav>
    <form class="container-background" action="../confirmacao.php" method="POST">
            <section class="container-login">
                <div class="title">
                    <h1>Faça seu <spam id="destaque">Login</spam></h1>
                </div>
                <div class="container-input">
                    <input type="email" class="textfield" name="email" id="email" placeholder="E-mail">
                    <input type="password" class="textfield" name="password" id="password" placeholder="Senha">
                    <input type="password" class="textfield" name="confirm-password" id="confirm=password"
                        placeholder="Confirme sua senha">
                    <select name="type-person" id="type-person">
                        <option value="pessoa-fisica">Pessoa Fisíca</option>
                        <option value="pessoa-juridica">Pessoa Jurídica</option>
                    </select>
                    <input id="btn-send-login" type="submit" value="Login">
                    <p>Não possui login? <a href="tela-cadastro.php">Cadastrar</a></p>
                </div>

            </section>
        </section>
</body>

</html>