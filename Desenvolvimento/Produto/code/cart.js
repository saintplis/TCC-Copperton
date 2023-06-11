var user_id = document.getElementsByClassName("product-submit");
var product_id = document.getElementsByClassName("product-submit");
    for(var i = 0; i<product_id.length; i++){
    for(var i = 0; i<user_id.length; i++){
        product_id[i] && user_id[i].addEventListener("click",function(event){
            var target = event.target;
            var id = target.getAttribute("data-id");
            var uid = target.getAttribute("data-uid");
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    var data = JSON.parse(this.responseText);
                    target.innerHTML = data.in_cart;
                }
            }
            xml.open("GET","connection.php?id=" + id + "&uid=" + uid, true);
            xml.send();
        })
    }}