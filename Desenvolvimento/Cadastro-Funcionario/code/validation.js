$('#senha, #confirmar').on('keyup', function () {
    if ($('#senha').val() == $('#confirmar').val()) {
      $('#password-validation').html('As senhas combinam').css('color', 'green');
    } else 
      $('#password-validation').html('As senhas não combinam').css('color', 'red');
  });