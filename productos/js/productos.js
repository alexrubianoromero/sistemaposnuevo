 function traerProductosIdGrupo(idGrupo){
    // alert('idgrupo de producto'+idGrupo);
        const http=new XMLHttpRequest();
        const url = '../productos/productos.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("columncentral").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=traerProductosIdGrupo"
        + "&idGrupo="+idGrupo
        // + "&tipoMov=2"
        );
    }