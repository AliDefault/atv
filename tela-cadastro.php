<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-login.css">
    <link rel="stylesheet" href="style-register.css">
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
    <section class="container-background">
            <section class="container-register">
                <div class="title-op-pessoa">
                    <select name="type-person" id="type-person">
                        <option value="pessoa-fisica">Pessoa Fisíca</option>
                        <option value="pessoa-juridica">Pessoa Jurídica</option>
                    </select>
                </div>
            </section>
            <section class="container-register-form">
                <div id="part-1">
                    <input type="text" placeholder="Nome">
                    <input type="date">
                </div>
                
                
            </section>
        </section>
</body>

</html>