function verificaForcaSenha() 
{
    var numeros = /([0-9])/;
    var alfabeto = /([a-zA-Z])/;
    var chEspeciais = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;

    if($('#senha').val().length<6) 
    {
        $('#password-status').html("<span style='color:red'>Fraco, insira no mínimo 6 caracteres</span>");
    } else {  	
    if($('#senha').val().match(numeros) && $('#senha').val().match(alfabeto) && $('#senha').val().match(chEspeciais))
    {            
        $('#password-status').html("<span style='color:green'><b>Forte</b></span>");
    } else {
        $('#password-status').html("<span style='color:orange'>Médio, insira um caracter especial</span>");
    }
    }
}