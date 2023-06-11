var remove = document.getElementsByClassName("excluir");
    for(var i = 0; i<remove.length; i++){
        remove[i].addEventListener("click",function(event){
            var target = event.target;
            var cart_id = target.getAttribute("data-id");
            var uid = target.getAttribute("data-uid");
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    target.innerHTML = this.responseText;
                    target.style.opacity = .3;
                }
            }
            xml.open("GET","http://localhost/desenvolvimento/Produto/code/connection.php?cart_id=" + cart_id, true);
            xml.send();
        })
    }