 function listarCuentas(){
    // alert('idgrupo de producto'+idGrupo);
        const http=new XMLHttpRequest();
        const url = '../cuentas/cuentas.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("columncentral").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=listarCuentas"
        // + "&idSuc="+idSuc
        // + "&tipoMov=2"
        );
    }


 function crearNuevaCuenta(){

    // alert ('crear nueva cuenta');
    // alert('idgrupo de producto'+idGrupo);
        const http=new XMLHttpRequest();
        const url = '../cuentas/cuentas.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                 var  resp = JSON.parse(this.responseText); 
                 document.getElementById("idCuentaActual").value = resp;
                // document.getElementById("columncentral").innerHTML = '';
                mostrarGrupos();

            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=crearNuevaCuenta"
        // + "&idSuc="+idSuc
        // + "&tipoMov=2"
        );

}





