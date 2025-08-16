    function agregarItemACuenta123456(idProducto)
    {
        // alert('idproducto'+idProducto); 
         var idCuenta =  document.getElementById("idCuentaActual").value;
        const http=new XMLHttpRequest();
        const url = '../itemsCuentas/itemsCuentas.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("divItemsCuenta").innerHTML = this.responseText;
                // document.getElementById("cantidad").focus();
            }
        };

        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=agregarItemACuenta123456"
        + "&idProducto="+idProducto
        + "&idCuenta="+idCuenta
        // + "&tipoMov=1"
        );
    }
    
    // function agregarItemACuenta123(idProducto){
    // alert('idproducto ssssssssssss'+idProducto);
    //     // var validaCuenta = validarCuentaActiva();
    //     // if(validaCuenta)
    //     // {
    //         var idCuenta =  document.getElementById("idCuentaActual").value;
    //         // var numeroCuenta =  document.getElementById("numeroCuenta").value;
    //         const http=new XMLHttpRequest();
    //         const url = '../itemsCuentas/itemsCuentas.php';
    //         http.onreadystatechange = function(){
    //             if(this.readyState == 4 && this.status ==200){
    //                 // document.getElementById("columncentral").innerHTML = this.responseText;
    //             }
    //         };
    //         http.open("POST",url);
    //         http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //         http.send("opcion=agregarItemACuenta123"
    //              + "&idCuentassss="+idCuenta
    //              + "&idProducto="+idProducto
    //             // + "&tipoMov=2"
    //         );
    //         listarItemsIdCuenta(idCuenta);
    //     // }

    // }


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
