<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.cs">
    <title>Portifólio</title>

    <style>

        :root {
            font-size: 16px;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            /* background-image: url('imagens/logo.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed; */

            border: 10px solid red;
            width: 100vw;
            height: 100vh;
            overflow-x: hidden;
        }

        p {
            border: 10px solid blue;
            font-size: 3rem;
        }

        h1 {
            background-color: yellow;
            display: block;
        }

        h1:hover {
            background-color: red;
        }

        .logo {
            position: fixed;
            bottom: calc(100vh/2);
            right: 0;
        }

        #interface {

        }

    </style>
</head>
<body>

    <div id="interface">

        <header class="cabecalho">

            <nav class="menu">

                <div class="logo">
                    <img src="imagens/logo.png" alt="LOGO" width="150" />
                </div>

                <ul>
                    <li>Home</li>
                    <li>Serviços</li>
                    <li>Produtos</li>
                    <li>Portifólio</li>
                    <li>Sobre</li>
                    <li>Contato</li>
                </ul>

            </nav>

            <div class="titles">
                <h1 class="titulo">Entregando serviços de qualidade</h1>
                <h1 class="subtitulo">Soluções de TI</h1>

                <p class="paragrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut laboriosam est velit voluptate architecto tenetur.</p>
            </div>

            <div class="socialIcons">
                <a href="#">Twitter</a>
                <a href="#">Facebook</a>
                <a href="#">Linkedin</a>
                <a href="#">Instagram</a>
            </div>

        </header>

    </div>
    
</body>
</html>