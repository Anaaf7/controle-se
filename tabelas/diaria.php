<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela diária</title>
    
    <link rel="stylesheet" href="../fontes/fonte.css">
    <link rel="shortcut icon" href="imagens/icones/moeda.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../js/funcoes.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.2/html2pdf.bundle.min.js"></script>

</head>

<body class="julius bg-[url('../imagens/fundos/diaria.png')] bg-cover bg-center bg-no-repeat min-h-screen flex flex-col">

    <header class="flex justify-between">

        <img src="../imagens/fundos/logo.png" alt="Logo do site" class="mt-0 ml-4 h-14">

        <nav class="flex space-x-4 m-5">
            <a href="../irTabelas.php" class="transition-transform transform hover:scale-105"><img src="../imagens/icones/tabelas.png" alt="Tabelas"></a>
            <a href="../blog.php" class="hover:text-green-800 mt-1 transition-transform transform hover:scale-105">Blog</a>
            <a href="../sobre.php" class="hover:text-green-800 mt-1 transition-transform transform hover:scale-105">Sobre</a>
            <a href="../home.php" class="transition-transform transform hover:scale-105"><img src="../imagens/icones/home.png" alt="Tela inicial"></a>
        </nav>
    </header>

    <main class="flex justify-center mt-8 gap-10 font-mono">
        <!-- FORMULÁRIO -->
        <div class="p-5 px-12 rounded-xl transition-transform transform hover:scale-105" style="background-color: #93bd81; box-shadow: -30px 30px 1px #e4ffd9;">

            <form id="formulario" method="get">

                <label for="data" class="mt-2 text-white font-extrabold text-xl">Data: </label>
                <input type="date" name="data" id="data" required
                    class="p-2 mt-3 border-2 border-white rounded hover:border-black focus:outline-none" style="box-shadow: -2px 2px 1px;"><br><br>

                <label for="tipo" class="text-white font-extrabold text-xl">Tipo: </label>
                <input type="text" name="tipo" id="tipo" required placeholder="Mercado..."
                    class="p-2 mt-3 border-2 border-white rounded hover:border-black focus:outline-none" style="box-shadow: -2px 2px 1px;"><br><br>

                <label for="descricao" class="text-white font-extrabold text-xl">Descrição: </label>
                <input type="text" name="descricao" id="descricao" placeholder="Compras do mês..."
                    class="p-2 mt-3 border-2 border-white rounded hover:border-black focus:outline-none" style="box-shadow: -2px 2px 1px;"><br><br>

                <label for="valor" class="text-white font-extrabold text-xl">Valor: </label>
                <input type="number" name="valor" id="valor" required placeholder="500,00"
                    class="p-2 mt-3 border-2 border-white rounded hover:border-black focus:outline-none" style="box-shadow: -2px 2px 1px;"><br><br>

                <div class="flex justify-center">
                    <input type="button" value="Enviar" onclick="dadosTabela(data.value, tipo.value, descricao.value, valor.value)" class="bg-white rounded-full p-2 hover:text-green-800 hover:bg-lime-100 transition-transform transform hover:scale-105" style="box-shadow: -2px 2px 1px;">
                </div>
            </form>
        </div>

        <!-- TABELA -->

        <div>
            <div id="content"> <!-- necessário para saber o que será gerado no PDF -->
                <table id="tabela" class="p-5 border-collapse border border-black shadow-lg">
                    <thead>
                        <tr class="bg-lime-100 text-center">
                            <th class="border border-black p-2">Data</th>
                            <th class="border border-black p-2">Tipo</th>
                            <th class="border border-black p-2">Descrição</th>
                            <th class="border border-black p-2">Valor (R$)</th>
                            <th class="border border-black p-2">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- dados adicionados na tabela -->
                    </tbody>
                </table>
                <div>
                    <span id="somatoria" class="font-bold hover:text-red-700">Valor gasto: R$ </span>
                </div>
            </div>
            <div class="mt-5 flex justify-center">
                <button id="gerarPdf" onclick="confirmarPdf()" class="bg-lime-200 p-2 border border-black rounded-full text-sm font-bold transition-transform transform hover:scale-105">Gerar PDF</button>
            </div>
        </div>
    </main>

    <!-- rodapé -->
    <footer class="flex justify-between fixed bottom-0 w-full">
        <div class="font-sans text-center w-full">
            <h1>&copy; 2025 <span class="text-green-800">Controle-se</span>. Todos os direitos reservados</h1>
        </div>

        <div class="mr-5 transition-transform transform hover:scale-105">
            <a href="../suporte.php"><img src="../imagens/icones/suporte.png" alt="ícone de suporte"></a>
        </div>
    </footer>

</body>

</html>