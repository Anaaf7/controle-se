<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="fontes/fonte.css">
    <link rel="shortcut icon" href="imagens/icones/moeda.ico">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="julius"> <!-- fonte do site -->

    <header class="flex justify-end m-5 space-x-4">

        <a href="blog.php" class="hover:text-green-800 mt-1 transition-transform transform hover:scale-110">Blog</a>

        <a href="sobre.php" class="hover:text-green-800 mt-1 transition-transform transform hover:scale-110">Sobre</a>

        <!-- Visivel apenas para usuários logados no site -->
        <?php
        if ($_SESSION['usuario'] || $_SESSION['adm']) {
            echo '<a href="irTabelas.php" class="transition-transform transform hover:scale-105">
               <img src="imagens/icones/tabelas.png" alt="Tabelas">
           </a>';
        } else {
            echo '<a href="login.php" class="transition-transform transform hover:scale-105"><img src="imagens/icones/usuario.png" alt="Tela de login"></a>';
        }
        ?>
    </header>

    <!-- Logo do site -->
    <div class="flex justify-center -mt-5">
        <img src="imagens/fundos/logo.png" alt="Logo do site" class="h-96">
    </div>

    <!-- Centralizar slogan e botão de cadastro -->
    <div class="text-center">

        <!-- slogan -->
        <div class="-mt-20">
            <label for="slogan">Organizando suas finanças de forma <span class="underline decoration-green-500">inteligente</span>.</label>
        </div>

        <!-- botão para se cadastrar no site visivel apenas se o usuário não estiver logado-->
        <?php
            if (!$_SESSION['usuario'] && !$_SESSION['adm']) {
                echo"<div class='mt-5 transition-transform transform hover:scale-110 '>
                <a href='cadastro.php' class='bg-lime-200 p-2 border border-black rounded-full text-sm font-bold' style='box-shadow: -5px 3px 1px #bbcfb3;'>Cadastrar-se</a>
                </div>";
            }
        ?>
    </div>

    <!-- Rodapé -->
    <footer>
        <a href="suporte.php">
            <img class="absolute bottom-4 right-4 transition-transform transform hover:scale-105" src="imagens/icones/suporte.png" alt="Ícone de suporte do site">
        </a>
        <img src="imagens/fundos/home.png" alt="Imagem de fundo de um porquinho soltando moedas" class="absolute bottom-0 -z-10">
    </footer>

</body>

</html>