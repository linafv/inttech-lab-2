function getCollections() {
    let shop = document.getElementById("shop").value;
    let result = localStorage.getItem(shop);
    
    document.getElementById('res').innerHTML = result;
}
function getQuantity(){
    let quantity = document.getElementById("quantity").value;
    let result = localStorage.getItem(quantity);
    document.getElementById('res').innerHTML = result;
}
function getMinMax() {
    let min_price = document.getElementById("min_price").value;
    let max_price = document.getElementById("max_price").value;
    let minMax = min_price + " " + max_price; 
    let result = localStorage.getItem(minMax);
    document.getElementById('res').innerHTML = result;
}