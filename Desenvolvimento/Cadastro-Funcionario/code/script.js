document.getElementById("salario").addEventListener("change", function(){
    this.value = parseFloat(this.value).toFixed(2);
 });