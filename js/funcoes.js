//Verificação cadastro de usuario
function validarSenha(){
    //coletar os dados inseridos no form 
    var senha1 = document.getElementById('senha1').value;
    var senha2 = document.getElementById('senha2').value;

    //verificar se a senha tem pelo menos 7 caracteres
    if(senha1.length < 7 || senha2.length < 7){
        alert('A senha deve conter no minímo 7 caracteres...');
        return false;
    }else if(senha1 != senha2) { //verificar se as senhas digitadas são iguais
        alert('As senhas digitadas estão diferentes ;)');
        return false;
    }else{ //o cadastro será realizado com sucesso
        alert('Cadastro feito com sucesso :)');
        return true;
    }
    
}

//-------------------------------------------------------------------------------

function confirmarPdf() {
    alert("Sua planilha em PDF foi gerada com sucesso :)");
}

const btnGenerate = document.querySelector("#gerarPdf");

btnGenerate.addEventListener("click", () => {

    //conteúdo do pdf
    const content = document.querySelector("#content");

    //configurações do pdf
    const options = {
        margin: [10, 25, 10, 25],
        filename: "tabela.pdf",
        jsPDF: { unit: "mm", format: "a4", orientation: "portrait" },
        html2canvas: { scale: 2 },
    };

    //gerar e baixar o pdf
    html2pdf().set(options).from(content).save();
})

//---------------------------------------------------------------------------

function dadosTabela(data, tipo, descricao, valor) {
    var tb = document.getElementById("tabela"); //coletar os dados da tabela

    //linhas da tabela
    var qtdLinhas = tb.rows.length; //quant tipo de linhas
    var linha = tb.insertRow(qtdLinhas); //inserir linha após a verificação feita acima

    //colunas da tabela
    var celldata = linha.insertCell(0);
    var celltipo = linha.insertCell(1);
    var celldescricao = linha.insertCell(2);
    var cellvalor = linha.insertCell(3);
    var cellExcluir = linha.insertCell(4); // Adicionar célula para o botão de excluir

    //inserir os dados do formulário na tabela
    celldata.innerHTML = data;
    celldata.classList.add("border", "border-black", "p-1.5", "text-center");

    celltipo.innerHTML = tipo;
    celltipo.classList.add("border", "border-black", "p-1.5", "text-center");

    celldescricao.innerHTML = descricao;
    celldescricao.classList.add("border", "border-black", "p-1.5", "text-center");

    cellvalor.innerHTML = parseFloat(valor).toFixed(2); // Garantir formato numérico com duas casas decimais
    cellvalor.classList.add("border", "border-black", "p-1.5", "text-center");

    // Criar o botão de excluir com onclick
    var excluirDado = document.createElement("button");
    excluirDado.innerHTML = "Excluir";
    excluirDado.classList.add("hover:bg-lime-200", "p-1.5", "text-center");
    excluirDado.onclick = function () {
        tb.deleteRow(linha.rowIndex); // Deleta a linha clicada
        somatoria(); // Atualizar a soma após excluir a linha
    };
    cellExcluir.appendChild(excluirDado);

    // Atualizar a soma após adicionar a linha
    somatoria();
}

// Função para calcular a soma dos valores na tabela
function somatoria() {
    var tabela = document.getElementById("tabela");
    var linhas = tabela.rows;
    var soma = 0;

    // Iterar pelas linhas do corpo da tabela (ignorar o cabeçalho)
    for (var i = 1; i < linhas.length; i++) {
        var celulaValor = linhas[i].cells[3]; // A quarta coluna (index 3) contém os valores
        if (celulaValor) {
            soma += parseFloat(celulaValor.innerText) || 0; // Adicionar o valor, garantindo que seja numérico
        }
    }

    // Exibir a soma no HTML
    document.getElementById("somatoria").innerText = "Total: R$ " + soma.toFixed(2);
}

