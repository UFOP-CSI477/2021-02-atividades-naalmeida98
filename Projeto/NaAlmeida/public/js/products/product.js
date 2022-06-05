let qtd;


function minusQtd() {
    console.log("aqui");
    qtd = parseInt(document.getElementById("qtdProduct").value);
    if (qtd != 1)
        document.getElementById("qtdProduct").value = qtd - 1;
}

function plusQtd() {
    qtd = parseInt(document.getElementById("qtdProduct").value);
    document.getElementById("qtdProduct").value = qtd + 1;
}