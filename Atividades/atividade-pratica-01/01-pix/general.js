let balance = 0;
var sendTotal = 0;
var receiveTotal = 0;
let pessoa;


function Pessoa(_transactionType, _typePix, _keyValue, _value, _transactionDate, _description) {
    this.transactionType = _transactionType;
    this.typePix = _typePix;
    this.keyValue = _keyValue;
    this.value = _value;
    this.transactionDate = _transactionDate;
    this.description = _description;
}

// TAILWIND

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

// FUNÇÕES DO PIX

function getForm() {
    var selectType = document.getElementById('transactionType');
    var transactionType = selectType.options[selectType.selectedIndex].value;
    var typePix = document.getElementById('typePix').value;
    const keyValue = document.getElementById("keyValue").value;
    const value = parseFloat(document.getElementById("value").value);
    const transactionDate = document.getElementById("transactionDate").value;
    const description = document.getElementById("description").value;

    pessoa = new Pessoa(transactionType, typePix, keyValue, value, transactionDate, description);

    if (transactionType == "Send")
        calculateSend(value);
    else if (transactionType == "Receive")
        calculateReceive(value);

    loadDatas();
    document.getElementById("popupExtract").style = "visibility: visible;";
}

function loadBanck() {
    console.log("loadBanck");
    fetch('https://brasilapi.com.br/api/banks/v1')
        .then(response => response.json())
        .then(data => select(data, "banck"))
        .catch(error => console.error(error));

}

function select(data, campo) {
    let select = document.getElementById(campo);

    for (let index in data) {
        const {
            code,
            name
        } = data[index];

        let option = document.createElement("option");
        option.value = code;
        option.innerHTML = name;
        select.appendChild(option);
    }
}

// FUNÇÕES EXTRACT

function calculateSend(_value) {
    sendTotal += _value;
    balance -= _value;

    console.log("sendTotal", sendTotal);
    console.log("balance", balance);

}

function calculateReceive(_value) {
    receiveTotal += _value;
    balance += _value;

    console.log("receiveTotal", receiveTotal);
    console.log("balance", balance);
}

function loadDatas() {
    document.getElementById("send").innerHTML = sendTotal;
    document.getElementById("receive").innerHTML = receiveTotal;
    document.getElementById("balance").innerHTML = balance;
}

function exit() {
    document.getElementById("popupExtract").style = "visibility: collapse;";
}