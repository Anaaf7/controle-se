<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="stylesheet" href="fontes/fonte.css">
    <link rel="shortcut icon" href="imagens/icones/dinheiro.ico">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="julius">


    <header class="flex justify-between">

        <img src="imagens/fundos/logo.png" alt="logo do site" class="mt-0 ml-4 h-14">

        <nav class="flex space-x-4 m-5">
            <a href="blog.php"
                class="hover:text-green-800 mt-1 transition-transform transform hover:scale-105">Blog</a>
            <a href="home.php" class="transition-transform transform hover:scale-110"><img
                    src="imagens/icones/home.png" alt="Tela inicial"></a>
        </nav>
    </header>

    <!---------------------------TITULO------------------------------------->
    <div class="text-center">
        <h1 class="mt-8 text-4xl font-extrabold">O que o site oferece a você?</h1>
        <span class="text-sm font-extrabold">O <span class="text-green-800 font-semibold">Controle-se</span> é um site
            pensado em quem quer organizar o dinheiro de forma prática. <br>
            Para melhor atende-los nessa jornada disponibilizamos três tipos de tabelas de gastos: </span>
    </div>

    <!---------------------------TEXTO 1------------------------------------->
    <div class="m-28 mt-16 flex rounded-3xl elegant shadow-xl transition-transform transform hover:scale-105"
        style="background-color: #e4ffd9;">

        <div class="m-5">
            <img src="imagens/calendario.png" alt="Imagem de cartão" class="w-48 h-auto">
        </div>

        <div class="flex-1 p-3">
            <h1 class="mt-6 -mb-3 text-2xl font-bold julius">Tabela diária</h1>
            <span class="font-semibold text-green-800">para a correria do dia a dia</span>
            <p class="mt-4 text-sm">
                Ideal para quem está dando os primeiros passos na organização financeira.
                Esta tabela foi projetada para ajudá-lo a acompanhar e controlar seus gastos
                diários com praticidade, permitindo uma visão clara e detalhada de suas despesas.
                Comece a monitorar suas finanças hoje mesmo e sinta a diferença em sua organização pessoal!
            </p>
            <span><a href="tabelas/diaria.php" class="hover:text-green-800">Acesse aqui!</a></span>

        </div>
    </div>

    <!---------------------------TEXTO 2------------------------------------->
    <div class="m-28 mt-16 flex rounded-3xl elegant shadow-xl transition-transform transform hover:scale-105"
        style="background-color: #93bd81;">

        <div class="m-5">
            <img src="imagens/contabilidade.png" alt="Imagem de cartão" class="w-48 h-auto">
        </div>

        <div class="flex-1 p-3">
            <h1 class="mt-6 -mb-3 text-2xl font-bold julius">Tabela semanal</h1>
            <span class="font-semibold text-green-800">organização de segunda a segunda = pazzzz</span>
            <p class="mt-4 text-sm">
                Ideal para quem busca organizar suas finanças de forma estruturada ao longo da semana.
                Esta tabela foi desenvolvida para oferecer uma visão abrangente e detalhada dos seus gastos,
                permitindo que você acompanhe suas despesas semanais e identifique padrões de consumo.
                Torne sua gestão financeira mais eficiente, otimize seus recursos e alcance seus objetivos com mais
                facilidade!
            </p>
            <span><a href="tabelas/semanal.php" class="hover:text-green-800">Acesse aqui!</a></span>

        </div>
    </div>

    <!---------------------------TEXTO 3------------------------------------->
    <div class="m-28 mt-16 flex rounded-3xl elegant shadow-xl transition-transform transform hover:scale-105"
        style="background-color: #e4ffd9;">

        <div class="m-5">
            <img src="imagens/texto3.png" alt="Imagem de cartão" class="w-48 h-auto">
        </div>

        <div class="flex-1 p-3">
            <h1 class="mt-6 -mb-3 text-2xl font-bold julius">Tabela de dívidas</h1>
            <span class="font-semibold text-green-800">plano para quitar já!</span>
            <p class="mt-4 text-sm">
                Ideal para quem precisa de um controle eficiente das dívidas e quer retomar o equilíbrio financeiro.  
                Esta tabela foi pensada para ajudá-lo a monitorar prazos, valores e condições de pagamento das suas dívidas,  
                proporcionando uma visão detalhada de sua situação financeira.  
                Com um controle organizado, você pode planejar seus pagamentos de forma estratégica e alcançar a liberdade financeira.
            </p>
            <span><a href="tabelas/dividas.php" class="hover:text-green-800">Acesse aqui!</a></span>

        </div>
    </div>

    <!---------------------------RODAPÉ------------------------------------->
    <footer class="flex justify-between mt-5">
        <div class="font-sans text-center w-full">
            <h1>&copy; 2025 <span class="text-green-800">Controle-se</span>. Todos os direitos reservados</h1>
        </div>

        <div class="mr-5 transition-transform transform hover:scale-105">
            <a href="suporte.php"><img src="imagens/icones/suporte.png" alt="ícone de suporte"></a>
        </div>


    </footer>

</body>

</html>