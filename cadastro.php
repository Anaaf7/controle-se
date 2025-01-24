<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="stylesheet" href="fontes/fonte.css">
    <link rel="shortcut icon" href="imagens/icones/porco.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/funcoes.js"></script>
    

</head>

<body class="julius bg-[url('imagens/fundos/cadastro.png')] bg-cover bg-center bg-no-repeat min-h-screen">

    <header class="flex justify-between">

        <img src="imagens/fundos/logo.png" alt="logo do site" class="mt-0 ml-14 h-14">

        <nav class="flex space-x-4 m-5">
            <a href="blog.php" class="hover:text-green-800 mt-1 transition-transform transform hover:scale-105">Blog</a>
            <a href="sobre.php" class="hover:text-green-800 mt-1 transition-transform transform hover:scale-105">Sobre</a>
            <a href="home.php" class="transition-transform transform hover:scale-105"><img src="imagens/icones/home.png" alt="Tela inicial"></a>
        </nav>
    </header>

    <div class="absolute right-52 mt-5 p-5 px-12 rounded-3xl transition-transform transform hover:scale-105" style="background-color: #93bd81; box-shadow: -30px 30px 1px #e4ffd9;">
        <form action="acaoCadastro.php" method="post">
            
            <div class="flex justify-center">
                <img src="imagens/ganho.png" alt="Imagem de perfil">
            </div>
            
            <input type="usuario" name="usuario" id="usuario" placeholder="Fulano..." required class="w-72 p-1.5 mt-3 border-2 border-white rounded hover:border-black focus:outline-none" style="box-shadow: -2px 2px 1px;"><br>
            <label for="usuario" class="text-xs font-mono">Digite um nome de usuário</label><br>

            <input type="email" name="email" id="email" placeholder="@..." required class="w-72 p-1.5 mt-3 border-2 border-white rounded hover:border-black focus:outline-none" style="box-shadow: -2px 2px 1px;"><br>
            <label for="email" class=" text-xs font-mono">Digite seu email</label><br>

            <input type="password" name="senha1" id="senha1" placeholder="123..." required class="w-72 p-1.5 mt-3 border-2 border-white rounded hover:border-black focus:outline-none" style="box-shadow: -2px 2px 1px;"><br>
            <label for="senha1" class=" text-xs font-mono">Crie uma senha de 7 caracteres</label><br>

            <input type="password" name="senha2" id="senha2" placeholder="123..." required class="w-72 p-1.5 mt-3 border-2 border-white rounded hover:border-black focus:outline-none" style="box-shadow: -2px 2px 1px;"><br>
            <label for="senha2" class=" text-xs font-mono">Repita a senha</label><br><br>

            <div class="flex justify-center">
                <input type="submit" name="acaoCad" id="acaoCad" value="Cadastrar" onclick="return validarSenha();" class="bg-white rounded-full p-2 font-mono hover:text-green-800 hover:bg-lime-100 transition-transform transform hover:scale-105">
            </div>
        </form>
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