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


 function alistarNuevaCuenta(){

    // alert ('crear nueva cuenta');
    // alert('idgrupo de producto'+idGrupo);
        const http=new XMLHttpRequest();
        const url = '../cuentas/cuentas.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("columncentral").innerHTML = '';
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=crearNuevaCuenta"
        // + "&idSuc="+idSuc
        // + "&tipoMov=2"
        );

        mostrarGrupos();
}

