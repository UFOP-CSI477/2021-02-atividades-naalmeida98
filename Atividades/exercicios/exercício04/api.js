function cleanSelect(campo) {

    const select = document.getElementById(campo);

    while (select.length > 1) {
        select.remove(1);
    }
}

function select(data, campo) {
    let select = document.getElementById(campo);
    cleanSelect(campo);

    for (let index in data) {
        const {
            id,
            nome
        } = data[index];

        let option = document.createElement("option");
        option.value = id;
        option.innerHTML = nome;

        select.appendChild(option);
    }

}

function loadStates() {

    // fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados/')
    //     .then(response => response.json())
    //     .then(data => console.log(data))
    //     .catch(error => console.error(error));

    fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados')
        .then(response => response.json())
        .then(data => select(data, "estados"))
        .catch(error => console.error(error));
}

function loadCities() {

    // fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados/')
    //     .then(response => response.json())
    //     .then(data => console.log(data))
    //     .catch(error => console.error(error));

    const estados = document.getElementById("estados");
    const index = estados.selectedIndex;
    const id = estados.options[index].value;

    cleanSelect("cidades");

    if (id == "") {
        return;
    }

    const url = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${id}/municipios`;

    fetch(url)
        .then(response => response.json())
        .then(data => select(data, "cidades"))
        .catch(error => console.error(error));
}