function Product(_name, _code, _value_av, _value_ap, _quantity) {
    this.name = _name;
    this.value_av = _value_av;
    this.value_ap = _value_ap;
    this.code = _code;
    this.quantity = _quantity;
}

function addBag() {
    let nameProduct = document.getElementById("nameProduct").innerHTML;
    let codeProduct = document.getElementById("codeProduct").value;
    let valueAvProduct = document.getElementById("valueAvProduct").value;
    let valueApProduct = document.getElementById("valueApProduct").value;
    let qtdProduct = document.getElementById("qtdProduct").value;


    product = new Product(nameProduct, codeProduct, valueAvProduct, valueApProduct, qtdProduct)
    console.log("product", product);
}

function editQtdBag() {


}