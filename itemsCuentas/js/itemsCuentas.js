    function agregarItemACuenta(idProducto){
    // alert('idgrupo de producto'+idGrupo);
        var validaCuenta = validarCuentaActiva();
        if(validaCuenta)
        {
            var idCuenta =  document.getElementById("idCuentaActual").value;
            // var numeroCuenta =  document.getElementById("numeroCuenta").value;
            const http=new XMLHttpRequest();
            const url = '../itemsCuentas/itemsCuentas.php';
            http.onreadystatechange = function(){
                if(this.readyState == 4 && this.status ==200){
                    // document.getElementById("columncentral").innerHTML = this.responseText;
                }
            };
            http.open("POST",url);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.send("opcion=agregarItemACuenta"
                + "&idCuenta="+idCuenta
                + "&idProducto="+idProducto
                // + "&tipoMov=2"
            );
            listarItemsIdCuenta(idCuenta);
        }

    }


    function listarItemsIdCuenta(idCuenta)
    {
            const http=new XMLHttpRequest();
            const url = '../itemsCuentas/itemsCuentas.php';
            http.onreadystatechange = function(){
                if(this.readyState == 4 && this.status ==200){
                    document.getElementById("divItemsCuenta").innerHTML = this.responseText;
                }
            };
            http.open("POST",url);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.send("opcion=listarItemsIdCuenta"
                + "&idCuenta="+idCuenta
            );
    }
