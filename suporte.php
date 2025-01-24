<?php
    session_start();

        //Necessário para verificar se o usuário deu loggout
if (isset($_GET['sair']) && isset($_SESSION['usuario'])) {
    unset($_SESSION['usuario']); // Remove o usuário da sessão
    session_destroy(); // Destroi a sessão completamente
    header('Location: home.php'); // Redireciona para a home
    exit;
}else if (isset($_GET['sair']) && isset($_SESSION['adm'])) {
    unset($_SESSION['adm']); // Remove o usuário da sessão
    session_destroy(); // Destroi a sessão completamente
    header('Location: home.php'); // Redireciona para a home
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte</title>

    <link rel="stylesheet" href="fontes/fonte.css">
    <link rel="shortcut icon" href="imagens/icones/dinheiro.ico">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="julius bg-[url('imagens/fundos/suporte.png')] bg-cover bg-center bg-no-repeat min-h-screen"> <!-- Fonte do site e imagem de fundo -->

    <header class="flex justify-between">

        <img src="imagens/fundos/logo.png" alt="logo do site" class="mt-0 ml-4 h-14">

        <nav class="flex space-x-4 m-5">
            <a href="blog.php" class="hover:text-green-800 mt-1 transition-transform transform hover:scale-105">Blog</a>
            <a href="sobre.php" class="hover:text-green-800 mt-1 transition-transform transform hover:scale-105">Sobre</a>
            <a href="home.php" class="transition-transform transform hover:scale-110"><img src="imagens/icones/home.png" alt="Tela inicial"></a>
        </nav>
    </header>

    <h1 class="m-10 text-center text-green-800 font-bold text-5xl">Precisa de ajuda?</h1>

    <div class="flex justify-around text-center m-28 mt-10">
        <div class="p-10 transition-transform transform hover:scale-105" style="background: #c0deab; box-shadow: 20px 20px 1px#edffd6;">
            <img src="imagens/email.png" alt="Imagem de email" class="ml-5 transition-transform transform hover:scale-105">
            <h1 class="font-extrabold text-xl  hover:text-green-800 -mt-2">Fale conosco</h1>
            <span>Contrele_se@gmail.com</span>
        </div>

        <div class="p-10 -ml-24 transition-transform transform hover:scale-105" style="background: #c0deab; box-shadow: 20px 20px 1px#edffd6;">
            <img src="imagens/instagram.png" alt="redes sociais" class="ml-6 transition-transform transform hover:scale-105">
            <div class="font-extrabold text-xl hover:text-green-800 mt-2">
                <a href="https://www.instagram.com/alfinetess2?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Redes sociais</a>
            </div>
        </div>

            <!-- Necessário para que apenas usuários logados saiam da conta -->
            <?php
            if ($_SESSION['usuario']) {
                //Para deletar a conta e ser redirecionado para o home
                echo '
                <div class="-ml-24 p-10 transition-transform transform hover:scale-105" style="background: #c0deab; box-shadow: 20px 15px 1px#edffd6;">

            <img src="imagens/excluir.png" alt="deletar conta" class="transition-transform transform hover:scale-105">

    
                <div class="font-extrabold text-xl  hover:text-green-800 mt-2">
               <a href="home.php?sair=true">Deletar conta</a></div>';

            }else if($_SESSION['adm']) {
                //Para deletar a conta e ser redirecionado para o home
                echo '
                <div class="-ml-24 p-10 transition-transform transform hover:scale-105" style="background: #c0deab; box-shadow: 20px 15px 1px#edffd6;">

            <img src="imagens/sair.png" alt="Sair da conta" class="transition-transform transform hover:scale-105">

            
            
                <div class="font-extrabold text-xl  hover:text-green-800 mt-2">
               <a href="home.php?sair=true">Sair da conta</a></div>';
            }
            ?>
    </div>


    <!-- Rodapé -->
    <footer class="absolute bottom-0 text-center w-full font-sans">
        <div>
            <h1>&copy; 2025 <span class="text-green-800">Controle-se</span>. Todos os direitos reservados</h1>
        </div>
    </footer>

</body>

</html>