<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabelas</title>
    <link rel="stylesheet" href="fontes/fonte.css">
    <link rel="shortcut icon" href="imagens/icones/porco.ico">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="julius bg-[url('imagens/fundos/tabelas.png')] bg-cover bg-center bg-no-repeat min-h-screen">

    <header class="flex justify-between">

        <img src="imagens/fundos/logo.png" alt="logo do site" class="mt-0 ml-4 h-14">

        <nav class="flex space-x-4 m-5">
            <a href="blog.php" class="hover:text-green-800 mt-1 transition-transform transform hover:scale-105">Blog</a>
            <a href="sobre.php" class="hover:text-green-800 mt-1 transition-transform transform hover:scale-105">Sobre</a>
            <a href="home.php" class="transition-transform transform hover:scale-105"><img src="imagens/icones/home.png" alt="Tela inicial"></a>
        </nav>
    </header>

    <div class="flex justify-center text-center m-20">
        <!----------------ILUSTRAÇÃO----------------->
        <img src="imagens/tabelas.png" alt="Imagem de calendário com cofrinho de moedas" class="w-80">
    
        <!---------------- Titulo------------->
        <div>
            <h1 class="text-2xl font-extrabold mt-8">Qual tabela vai te ajudar hoje?</h1>
    
            <!------------- Opções---------------->
            <div class=" mt-4">
                <div class="bg-lime-100 px-16 py-3 inline-block rounded-lg shadow-md transition-transform transform hover:scale-110">
                    <a href="tabelas/diaria.php">Diária</a>
                </div>
                <br>
                <div class="bg-lime-100 px-14 py-3 inline-block rounded-lg mt-5 shadow-md transition-transform transform hover:scale-110 ">
                    <a href="tabelas/semanal.php" >Semanal</a>
                </div>
                <br>
                <div class="bg-lime-100 px-16 py-3 inline-block rounded-lg mt-5 shadow-md transition-transform transform hover:scale-110">
                    <a href="tabelas/dividas.php">Dividas</a>
                </div>
            </div>
        </div>
    </div>
    

    <footer class="flex justify-between fixed bottom-0 w-full">
        <div class="font-sans text-center w-full">
            <h1>&copy; 2025 <span class="text-green-800">Controle-se</span>. Todos os direitos reservados</h1>
        </div>

        <div class="mr-5 transition-transform transform hover:scale-105">
            <a href="suporte.php"><img src="imagens/icones/suporte.png" alt="ícone de suporte"></a>
        </div>
    </footer>


</body>

</html>