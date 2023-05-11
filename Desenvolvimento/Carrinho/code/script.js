'use strict';

// elementos inciais
const pagarBtn = document.querySelector('#pagar-total');
const removerBtn = document.querySelectorAll('#remover');
const quantidadeElem = document.querySelectorAll('#quantidade');
const acrescentarBtn = document.querySelectorAll('#acrescentar');
const precoElem = document.querySelectorAll('#preco');
const subtotalElem = document.querySelector('#extrato-subtotal');
const taxasElem = document.querySelector('#extrato-taxas');
const totalElem = document.querySelector('#extrato-total');

// loop para acrescentar ou diminuir produto
for ( let i = 0; i < acrescentarBtn.length; i++ ) {
    acrescentarBtn[i].addEventListener('click', function(){
        // coletar o valor do campo 'quantidade',
        // baseado no clique do botão 'acrescentar'.
        let acrescentar = Number(this.previousElementSibling.textContent);
        acrescentar++;
        // mostrar o valor da variavel 'acrescentar' no elemento 'quantidadeElem'
        // baseado no clique do botão 'acrescentar'
        this.previousElementSibling.textContent = acrescentar;

        totalCalc();
    });
    removerBtn[i].addEventListener('click', function(){
        // coletar o valor do campo 'quantidade',
        // baseado no clique do botão 'remover'.
        let remover = Number(this.nextElementSibling.textContent);
        // diminuir o valor da variavel 'remover' em 1 baseado na condição
        remover <- 1 ? 1 : remover--;
        // coletar o valor do campo 'quantidade',
        // baseado no clique do botão 'remover'.
        this.nextElementSibling.textContent = remover;

        totalCalc();
    })
}
// função para calcular o extrato do preço do produto
const totalCalc = function(){
    // declarando as variaveis iniciais
    const taxas = 0.10;
    let subtotal = 0;
    let totalTax = 0;
    let total = 0;
    // loop para calcular o valor 'subtotal' para todos produtos
    for(let i = 0; i < quantidadeElem.length; i++ ) {
        subtotal += Number(quantidadeElem[i].textContent) * Number(precoElem[i].textContent);
    }
    // mostrar o valor da variavel 'subtotal' no elemento 'subtotalElem'
    subtotalElem.textContent = subtotal.toFixed(2);
    // calculando o 'totalTax'
    totalTax = subtotal * taxas;
    // mostrar o 'totalTax' no elemento 'taxasElem'
    taxasElem.textContent = totalTax.toFixed(2);
    // calculando o 'total'
    total = subtotal + totalTax;
    // mostrar o valor da variavel 'total' nos elementos 'totalElem' e 'pagarBtn'
    totalElem.textContent = total.toFixed(2);
    pagarBtn.textContent = total.toFixed(2);
}
function mudarCor1 () {
    document.getElementById("botao1").style.backgroundColor = "#ff2525";   
}
function mudarCor2 () {
    document.getElementById("botao2").style.backgroundColor = "#ff2525";   
}