 function mostrarMesasIdSUc(idSuc){
    // alert('idgrupo de producto'+idGrupo);
        const http=new XMLHttpRequest();
        const url = '../mesas/mesas.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("columncentral").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=mostrarMesasIdSUc"
        + "&idSuc="+idSuc
        // + "&tipoMov=2"
        );
    }