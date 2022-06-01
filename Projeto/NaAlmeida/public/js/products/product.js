let qtd;


function minusQtd() {
    qtd = parseInt(document.getElementById("qtd").value);
    if (qtd != 1)
        document.getElementById("qtd").value = qtd - 1;
}

function plusQtd() {
    qtd = parseInt(document.getElementById("qtd").value);
    document.getElementById("qtd").value = qtd + 1;
}


// let valueAp;

// function loadValueAp() {

//     console.log("aqui");

// }