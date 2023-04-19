<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCandies - Contact</title>
    <link rel="stylesheet" href="../static/css/styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../static/imgs/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../static/imgs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../static/imgs/favicon-16x16.png">
    <link rel="manifest" href="../static/imgs/site.webmanifest">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    <header id="header2">
        <a id="my-candies-logo2" href="../index.php">MyCandies</a>
        <nav id="navbar">
            <button id="btn-mobile"><i class="material-icons">menu</i></button>
            <ul id="menu2">
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="novidades.php">Novidades</a></li>
                <li><a href="contato.php" class="menu-active">Contato</a></li>
                <li><a href="sobre.php">Sobre nós</a></li>
            </ul>
        </nav>
    </header>
    <div id="contact">
        <h1>Entre em contato</h1>
        <div id="social-media">
            <h2>Redes Sociais</h2>
            <ul>
                <li><a href="https://instagram.com/ttoledopaulo/" target="_blank">Paulo Toledo - Instagram</a></li>
                <li><a href="https://instagram.com/luiz.arthurrv/" target="_blank">Luiz Arthur - Instagram</a></li>
                <li><a href="https://instagram.com/igeovannamelo/" target="_blank">Geovanna Melo - Instagram</a></li>
            </ul>
        </div>
        <div id="mail-me">
            <form id="contato" action="mailto:paulo.aff1803@gmail.com" method="get" enctype="text/plain">

                E-mail<br>
                <input type="email" name="email" placeholder="Seu e-mail"><br>
                Subject<br>
                <input type="text" name="subject" placeholder="Assunto"><br>
                Message<br>
                <textarea name="body" rows="5" cols="20" placeholder="Sua mensagem" style="resize: none;"></textarea><br><br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
    <script src="../static/js/script.js" type="text/javascript"></script>

</body>
</html>
