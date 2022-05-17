let value, conversionResult, fromQuote, toQuote, date, nameFrom, nameTo;

function dropdownHandler(element) {
    let single = element.getElementsByTagName("ul")[0];
    single.classList.toggle("hidden");
}

function MenuHandler(el, val) {
    let MainList = el.parentElement.getElementsByTagName("ul")[0];
    let closeIcon = el.parentElement.getElementsByClassName("close-m-menu")[0];
    let showIcon = el.parentElement.getElementsByClassName("show-m-menu")[0];
    if (val) {
        MainList.classList.remove("hidden");
        el.classList.add("hidden");
        closeIcon.classList.remove("hidden");
    } else {
        showIcon.classList.remove("hidden");
        MainList.classList.add("hidden");
        el.classList.add("hidden");
    }
}
let sideBar = document.getElementById("mobile-nav");
let menu = document.getElementById("menu");
let cross = document.getElementById("cross");
sideBar.style.transform = "translateX(-100%)";
const sidebarHandler = (check) => {
    if (check) {
        sideBar.style.transform = "translateX(0px)";
        menu.classList.add("hidden");
        cross.classList.remove("hidden");
    } else {
        sideBar.style.transform = "translateX(-100%)";
        menu.classList.remove("hidden");
        cross.classList.add("hidden");
    }
};
let list = document.getElementById("list");
let chevrondown = document.getElementById("chevrondown");
let chevronup = document.getElementById("chevronup");
const listHandler = (check) => {
    if (check) {
        list.classList.remove("hidden");
        chevrondown.classList.remove("hidden");
        chevronup.classList.add("hidden");
    } else {
        list.classList.add("hidden");
        chevrondown.classList.add("hidden");
        chevronup.classList.remove("hidden");
    }
};
let list2 = document.getElementById("list2");
let chevrondown2 = document.getElementById("chevrondown2");
let chevronup2 = document.getElementById("chevronup2");
const listHandler2 = (check) => {
    if (check) {
        list2.classList.remove("hidden");
        chevrondown2.classList.remove("hidden");
        chevronup2.classList.add("hidden");
    } else {
        list2.classList.add("hidden");
        chevrondown2.classList.add("hidden");
        chevronup2.classList.remove("hidden");
    }
};

function converter() {
    console.log("aqui");
    document.getElementById("popupConverter").style.visibility = "visible";
}

function exit() {
    document.getElementById("popupConverter").style.visibility = "collapse";
}

// FUNÇÕES DO CONVERSOR

//NOVO LINK: https://v6.exchangerate-api.com/v6/bf08c8f104362092cc254a17/latest/USD



function loadCoin() {
    console.log("loadCurrency");
    fetch('https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/Moedas?$top=100&$format=json')
        .then(response => response.json())
        .then(data => select(data, "fromCoin", "toCoin"))
        //  .then(data => console.log(data))
        .catch(error => console.error(error));

}

function select(data, campo1, campo2) {
    let select1 = document.getElementById(campo1);
    let select2 = document.getElementById(campo2);

    let _data = data['value'];

    for (let index in _data) {
        const {
            simbolo
        } = _data[index];

        let option1 = document.createElement("option");
        let option2 = document.createElement("option");
        option1.innerHTML = simbolo;
        option2.innerHTML = simbolo;

        select1.appendChild(option1);
        select2.appendChild(option2);
    }
}

async function loadConverter() {

    var fromSelect = document.getElementById('fromCoin');
    nameFrom = fromSelect.options[fromSelect.selectedIndex].value;

    var toSelect = document.getElementById('toCoin');
    nameTo = toSelect.options[toSelect.selectedIndex].value;

    date = document.getElementById('date').value;
    value = parseFloat(document.getElementById('value').value);

    console.log('date', date);
    console.log('value', value);
    console.log('from', nameFrom);
    console.log('to', nameTo);

    try {
        loadFromQuote();
        loadToQuote();
    } catch (error) {
        window.alert("Escolha nova data! Não é possível fazer conversão com datas em branco, ou finais de semana e feriados.")
        return
    }

    converter();
    setDates();

    document.getElementById("popupConverter").style = "visibility: visible;";

}

function loadFromQuote() {

    console.log("loadFromQuote");
    fetch(`https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaDia(moeda=@moeda,dataCotacao=@dataCotacao)?@moeda='${nameFrom}'&@dataCotacao='${date}'&$top=100&$format=json`)
        .then(response => response.json())
        .then(data => getValue(data, 'from'))
        //.then(data => console.log(data))
        .catch(error);
    return;

}

function loadToQuote() {
    console.log("loadToQuote");
    fetch(`https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaDia(moeda=@moeda,dataCotacao=@dataCotacao)?@moeda='${nameTo}'&@dataCotacao='${date}'&$top=100&$format=json`)
        .then(response => response.json())
        .then(data => getValue(data, 'to'))
        //.then(data => console.log(data))
        .catch(error => console.error(error));
    return;

}

function getValue(_data, _type) {
    if (_type == 'from') {
        fromQuote = _data["value"][1]["cotacaoCompra"];
        console.log('fromQuote', fromQuote);

    } else if (_type == 'to') {
        toQuote = parseFloat(_data["value"][1]["cotacaoCompra"]);
        console.log('toQuote', toQuote);
    }
}


function converter() {

    conversionResult = ((1 / fromQuote) * toQuote) * value;
    console.log("conversionResult", conversionResult);

}

function setDates() {
    document.getElementById('valueToCoin').innerHTML = 'R$ ' + conversionResult;
    document.getElementById('nameToCoin').innerHTML = nameTo;

    document.getElementById('valueFromCoin').innerHTML = 'R$ ' + value;
    document.getElementById('nameFromCoin').innerHTML = nameFrom;

}