<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Portifólio</title>
</head>
<body>
    <header class="cabecalho">
        <nav class="cabecalho__menu">
            <a class="cabecalho__menu__link" href="<?php echo 'index.php'; ?>">Home</a>
            <a class="cabecalho__menu__link" href="<?php echo 'about.php'; ?>">Sobre mim</a>
            <a class="cabecalho__menu__link" href="curriculo.php">Currículo</a>
        </nav>
    </header>
    <main class="apresentacao">
        <section class="apresentacao__conteudo">
            <h1 class="apresentacao__conteudo__titulo">Eleve seu negócio digital a outro nível <strong class="titulo-destaque">com um Front-end de qualidade!</strong></h1>
            <p class="apresentacao__conteudo__texto">
                Olá! Sou Felipe Verdade Didio, desenvolvedor Front-end com especialidade em React, HTML e CSS. Ajudo pequenos negócios e designers a colocarem em prática boas ideias. Vamos conversar?
            </p>
            <div class="apresentacao__links">
                <h2 class="apresentacao__links__subtitulo">Acesse minhas redes:</h2>
                <a class="apresentacao__links__navegacao" href="https://github.com/FelipeDidio" target="_blank">
                    <img src="./assets/github.png">Github</a>

                <a class="apresentacao__links__navegacao" href="https://www.linkedin.com/in/felipe-verdade-didio/" target="_blank">
                <img src="./assets/linkedin.png">LinkedIn</a>
                
                <a class="apresentacao__links__navegacao" href="https://www.instagram.com/felipeverdade/" target="_blank">
                <img src="./assets/instagram.png">Instagram</a>
                
            </div>
        </section>    
    <img class="foto__perfil" src="img/FelipePerfil.jpg" alt="Foto de Felipe Desenvolvedor">
    </main>
    <footer class="rodape">
        <p>Desenvolvido por Felipe</p>
    </footer>
</body>
</html>