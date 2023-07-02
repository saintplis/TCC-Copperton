document.getElementById("preco").addEventListener("change", function(){
    this.value = parseFloat(this.value).toFixed(2);
 });