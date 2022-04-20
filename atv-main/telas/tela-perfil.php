<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style-navbar2.css">
    <link rel="stylesheet" href="../style-perfil.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul class="menu">
            <li><a href="tela-principal.php">Home</a></li>
            <li><a href="">Vagas</a></li>
            <li><a href="">Sobre</a></li>
            <li id="user_before"><p><img src="../imagens/user.png" alt=""></p></li>
            <li id="user_after"><p><img src="../imagens/user.png" alt=""></p></li>
        </ul>
        
    </nav>
    <label for="user_after" id="user_menu">
                <ul>
                    <li><a href="#">Perfil</a></li>
                    <li><a href="#">Empresas</a></li>
                    <li><a href="#">Encerrar sessão</a></li>
                </ul>
    </label>
    <section class="painel-perfil">
        <div id="perfil-pessoal">
            <h1>Perfil</h1>
            <form action="" id="pessoal-form">
                <img src="../imagens/user.png" alt="" class="image" id="image">
                <input type="text" class="textfield" name="nome" placeholder="Nome">
                <input type="date" class="data" name="dataNasc">
                <input type="email" class="textfield" name="email" id="email" placeholder="E-mail">
                <input type="password" class="textfield" name="senha" placeholder="Senha">
                <input type="submit" id="btn-salvar" value="Salvar">
            </form>
        </div>
        <div id="perfil-profissional">
            <form action="" id="profissional-form">
                <div id="txt">
                    <input type="text" class="textfield" name="formacao" placeholder="Formação">
                    <input type="text" class="textfield" name="cidade" placeholder="Cidade">
                    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Descrição" resizeble="false"></textarea>
                </div>
                
                <div id="curriculo">

                </div>
                
                <input type="submit" id="btn-enviar" value="Enviar">
            </form>
        </div>
    </section>
</body>
<script src="../script.js"></script>
</html>