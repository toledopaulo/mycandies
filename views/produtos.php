<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCandies - Shop</title>
    <link rel="stylesheet" href="../static/css/styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../static/imgs/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../static/imgs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../static/imgs/favicon-16x16.png">
    <link rel="manifest" href="../static/imgs/site.webmanifest">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
</head>
<body>
    <header id="header2">
        <a id="my-candies-logo2" href="../index.php">MyCandies</a>
        <nav id="navbar">
            <button id="btn-mobile"><i class="material-icons">menu</i></button>
            <ul id="menu2">
                <li><a href="produtos.php" class="menu-active">Produtos</a></li>
                <li><a href="novidades.php">Novidades</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="sobre.php">Sobre nós</a></li>
            </ul>
        </nav>
    </header>
    <div id="produtos">
        <h1>Produtos</h1>
        <div id="product-list">
            <?php
                $conexao = new PDO("mysql:host=localhost;dbname=empresa", "root", "");
                $consulta = $conexao->query("select * from `produtos`");
                while ($linha = $consulta->fetch(PDO::FETCH_OBJ)) {
                    echo(
                            "<div class='products' id='candy-$linha->id_prod'>" .
                            "<h1>" . $linha->nome . "</h1>" .
                            "<p class='subtitle' style='margin-top: -2rem;'>(" . $linha->sabor . ")</p>" .
                            "<img src='" . $linha->image_url . "' width='210px' height='210px'>" .
                            "<p id='valor'>" . $linha->valor . " <span style='color: #ffa200'>BTC</span></p>" .
                            "<p id='estoque'>Estoque: <span style='color: #14ff00'>" . $linha->qtdestoque . "</span></p>" .
                            "<button onclick=buy_candy($linha->id_prod) value='$linha->nome:$linha->sabor:$linha->id_prod:$linha->valor', class='buy-candy-btn' id='buy-candy-$linha->id_prod' >Comprar</button>" .
                            "</div>"
                    );
                }
            ?>
        </div>
    </div>
    <script>

        function buy_candy(candy_id) {
            let candy_selected = document.getElementById(`buy-candy-${candy_id}`)
            let candy_info_array = candy_selected.value.split(":")
            let candy_name = candy_info_array[0]
            let candy_flavor = candy_info_array[1]
            let candy_price_btc = candy_info_array[3]
            fetch("https://api.coindesk.com/v1/bpi/currentprice/BRL.json").then(async response => {
                let res = await response.json()
                let candy_price_brl = parseFloat(res["bpi"]["BRL"]["rate"]) * parseFloat(candy_price_btc) * 1000
                Swal.fire({
                    title: 'Prosseguir com a compra?',
                    html: `Produto: ${candy_name}<br>
                       Sabor: ${candy_flavor}<br>
                       Preço: ${candy_price_btc} BTC <span style="color: #14ff00">(R$ ${candy_price_brl.toFixed(2)})</span><br/>
                `,
                    icon: "question",
                    confirmButtonText: 'Sim'
                }).then(res => {
                    Swal.fire({
                        html: `<span style="color: #ffa200">Endereço: bc1qdsqdh6qmu5n00dsmsmdg73w9000mma6zazz4e3</span><br>
                        <span style="font-size: 14px"><b>Instruções</b><br>
                        Envie exatamente <span style="color: #ffa200">${candy_price_btc} BTC</span> (R$${candy_price_brl.toFixed()}) para o endereço acima e após aprovação da transação envie uma mensagem na aba contato passando as informações do seu pedido e com o endereço de entrega</span>.
                        `,
                        imageUrl: '../static/imgs/qrcode-btc.png',
                        imageWidth: 256,
                        imageHeight: 256,
                    })
                })
            })

        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="../static/js/script.js" type="text/javascript"></script>

</body>
</html>