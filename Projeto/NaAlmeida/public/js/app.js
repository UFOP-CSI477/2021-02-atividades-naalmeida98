let qtdBag;


function minusQtdBag() {
    qtdBag = parseInt(document.getElementById("qtdBag").value);
    if (qtdBag != 0)
        document.getElementById("qtdBag").value = qtdBag - 1;
}

function plusQtdBag() {
    qtdBag = parseInt(document.getElementById("qtdBag").value);
    document.getElementById("qtdBag").value = qtdBag + 1;
}