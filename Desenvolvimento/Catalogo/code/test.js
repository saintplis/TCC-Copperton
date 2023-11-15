function camiseta() {
    $.ajax({
       url:'ajaxScript.php',
       complete: function (response) {
          alert(response.responseText);
       },
       error: function () {
           alert('Erro');
       }
   });  
 
   return false;
}