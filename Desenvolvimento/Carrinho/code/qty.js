var incrementButton = document.getElementsByClassName('inc');
var decrementButton = document.getElementsByClassName('dec');

// INCREMENT

for(var i = 0; i < incrementButton.length; i++){
    var button = incrementButton[i];
    button.addEventListener('click',function(event){

        var buttonClicked = event.target;
        // console.log(buttonClicked);
        var input = buttonClicked.parentElement.children[1];
        // console.log(input);
        var inputValue = input.value;
        // console.log(inputValue);
        var newValue = parseInt(inputValue) + 1;
        // console.log(newValue);
        if (newValue <= 10) {
            input.value = newValue;
        } else{
            input.value = 10;
        }
        getTotal()
    })
}

// DECREMENT

for(var i = 0; i < decrementButton.length; i++){
    var button = decrementButton[i];
    button.addEventListener('click',function(event){

        var buttonClicked = event.target;
        // console.log(buttonClicked);
        var input = buttonClicked.parentElement.children[1];
        // console.log(input);
        var inputValue = input.value;
        // console.log(inputValue);
        var newValue = parseInt(inputValue) - 1;
        // console.log(newValue);
        if (newValue >= 1) {
            input.value = newValue;
        } else{
            input.value = 1;
        }

        getTotal()
    })
}

//  SUM PRICE ELEMENTS

document.addEventListener("DOMContentLoaded", getTotal())

function getTotal() {
    var arr = document.querySelectorAll('.preco');
    var qty = document.querySelectorAll('.input-filed');
    var total = 0;
    for(var i = 0; i < qty.length; i++){
        total += Number(qty[i].value) * parseFloat(arr[i].value.replace(',', '.'));
    }
    
    document.getElementById('total').value = total.toFixed(2).toString().replace('.', ',')
    document.getElementById('pagar-total').innerText = total.toFixed(2).toString().replace('.', ',')
}
