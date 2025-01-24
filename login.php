<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <link rel="stylesheet" href="fontes/fonte.css">
   <link rel="shortcut icon" href="imagens/icones/porco.ico">
   <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="julius bg-[url('imagens/fundos/login.png')] bg-cover bg-center bg-no-repeat min-h-screen"> <!-- Fonte do site e imagem de fundo -->
    
    <!-- Necessário para a logo do site ficar separada dos links de navegação -->
    <header class="flex justify-between">
        <!-- logo do site -->
        <img src="imagens/fundos/logo.png" alt="logo do site" class="mt-0 ml-4 h-14">

        <!-- links de navegação -->
        <nav class="flex space-x-4 m-5">
            <a href="blog.php" class="hover:text-green-800 mt-1 transition-transform transform hover:scale-110">Blog</a>
            
            <a href="sobre.php" class="hover:text-green-800 mt-1 transition-transform transform hover:scale-110">Sobre</a>
            
            <a href="home.php" class="transition-transform transform hover:scale-105"><img src="imagens/icones/home.png" alt="Tela inicial"></a>
        </nav>
    </header>

    <!-- Necessário para colocar o formulário na esquerda -->
    <div class="absolute left-52 mt-28 p-5 px-12 rounded-3xl transition-transform transform hover:scale-105" style="background-color: #93bd81; box-shadow: -30px 30px 1px #e4ffd9;">
        
        <form action="acaoLogin.php" method="post">
            <!-- ícone do login -->
            <div class="flex justify-center">
                <img src="imagens/login.png" alt="Imagem de perfil">
            </div>

            <!-- dados para validar a entrada do usuário-->
            <input type="text" name="usuario" id="usuario" placeholder="Fulano..." required class="w-80 p-1.5 border-2 border-white rounded hover:border-black focus:outline-none" style="box-shadow: -2px 2px 1px;"><br>
            <label for="usuario" class=" text-xs font-mono">Digite seu nome de usuário</label><br>

            <input type="password" name="senha" id="senha" placeholder="123..." required class="w-80 p-1.5 mt-3 border-2 border-white rounded hover:border-black focus:outline-none" style="box-shadow: -2px 2px 1px;"><br>
            <label for="senha" class=" text-xs font-mono">Digite sua senha</label>

            <div class="flex justify-center">
                <input type="submit" id="acao" name="acao" value="Login" class="bg-white rounded-full p-3 mt-5 font-mono hover:text-green-800 hover:bg-lime-100 transition-transform transform hover:scale-105">
            </div>
        </form>

    </div>

    <!-- Rodapé -->
    <footer class="flex justify-between fixed bottom-0 w-full">
        <div class="font-sans text-center w-full">
            <h1>&copy; 2025 <span class="text-green-800">Controle-se</span>. Todos os direitos reservados</h1>
        </div>

        <div class="mr-5 transition-transform transform hover:scale-105">
            <a href="suporte.php"><img src="imagens/icones/suporte.png" alt="ícone de suporte"></a>
        </div>
    </footer>
</div>