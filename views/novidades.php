<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCandies - News</title>
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
                <li><a href="novidades.php" class="menu-active">Novidades</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="sobre.php">Sobre nós</a></li>
            </ul>
        </nav>
    </header>
    <div id="news">
        <h1>Novidades</h1>
        <?php
        $conexao = new PDO("mysql:host=localhost;dbname=empresa", "root", "");
        $consulta = $conexao->query("select * from `novidades`");
        while ($linha = $consulta->fetch(PDO::FETCH_OBJ)) {
            echo(
                "<div class='news-container' id='news- . $linha->id_nov . '>" .
                "<h1>" . $linha->resumo . "</h1><br/>" .
                "<img src=$linha->image_url width=210px heigth='210px' style='margin-top: -2rem'>" .
                "<p class='subtitle''>" . $linha->descricao . "</p>" .
                "</div>"
            );
        }
        ?>
    </div>
    <script src="../static/js/script.js" type="text/javascript"></script>
</body>
</html>