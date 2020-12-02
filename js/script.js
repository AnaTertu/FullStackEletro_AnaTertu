function exibir_descricao(descricao) {
    //alert(descricao)
    let elementos = document.getElementsByClassName("box_produto")
    //console.log(elementos)
    for (var i = 0; i < elementos.length; i++) {
        //console.log(elementos[i].idprodutos)
        if (descricao == elementos[i].id)
            elementos[i].style = "display: inline-block";
    } else { 
            elementos[i].style = "display:none";
    }
}

let exibir_todos = () => {
    let elementos = document.getElementsByClassName("box_produto")
    for (let i = 0; i < elementos.length; i++) { 
    /* if (category == elements[i].id) {
        elementos[i].style = "display: inline-block";
    } else {
      elements[i].style = 'display: none;';
    }*/
    
    elementos[i].style = "display:inline-block";
  }
}

let destaque = (imagem) => {
    //console.log(imagem)
    if (imagem.width == 150) {
        imagem.width = 200;
        imagem.style= 'transition: 0.2s;';
    } else {
        imagem.width = 150;
        imagem.style= 'transition: 0.2s;';
    }
}

let redimensiona = (imagem) => {
    if (imagem.width === 120) {
        imagem.width = 260;
    }
    else {
        imagem.width = 120;
    }
}

function visualiza_info(imagem){
    let legenda = imagem.getElementsByClassName("legenda")[0];
    legenda.stle.visibility = "initial";
}

function esconde_info(imagem){
    let legenda = imagem.getElementsByClassName("legenda")[0];
    legenda.style.visibility = "hidden";
}

function exibir_mensagem(imagem){
    let legenda = imagem.getElementsByClassName("legenda")[0];
    let nome = legenda.getElementsByTagName("P")[0].innerText;
    let preco = legenda.getElementsByTagName("P")[1].innertText;
    alert("Nome do produto: " + nome + "Preço do produto: " + preco);
}

function aumenta_menu(a) {
    a.style.fontSize = "22pt";
}

function diminui_menu(a){
    a.style.fontSize = "initial";
}

function visualiza_info(imagem){
    let legenda = imagem.getElementsByClassName("legenda")[0];
    legenda.stle.visibility = "initial";
}

function esconde_info(imagem){
    let legenda = imagem.getElementsByClassName("legenda")[0];
    legenda.style.visibility = "hidden";
}

function exibir_mensagem(imagem){
    let legenda = imagem.getElementsByClassName("legenda")[0];
    let nome = legenda.getElementsByTagName("P")[0].innerText;
    let preco = legenda.getElementsByTagName("P")[1].innertText;
    alert("Nome do produto: " + nome + "Preço do produto: " + preco);
}

function aumenta_menu(a) {
    a.style.fontSize = "22pt";
}

function diminui_menu(a){
    a.style.fontSize = "initial";
}
*/