    function calculeDevolucion()
    {
          var totalItems =  document.getElementById("totalItems").value;
          var valorPagado =  document.getElementById("valorPagado").value;
          //   var valorDevuelto =  document.getElementById("valorDevuelto").value;
          var devuelto = parseInt(totalItems)-parseInt(valorPagado);
        //   alert(totalItems +'-'+ valorPagado+'-'+ devuelto);
         document.getElementById("valorDevuelto").value = devuelto;
    }
    
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

    function listarItemsCuentaExistente(idCuenta)
    {
        // alert('idproducto'+idProducto); 
        const http=new XMLHttpRequest();
        const url = '../itemsCuentas/itemsCuentas.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("idCuentaActual").value= idCuenta;
                // document.getElementById("divItemsCuenta").innerHTML = '';
                document.getElementById("divItemsCuenta").innerHTML = this.responseText;
                // document.getElementById("cantidad").focus();
            }
        };

        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=listarItemsCuentaExistente"
        + "&idCuenta="+idCuenta
        // + "&tipoMov=1"
        );
        mostrarGrupos();
    }
    function formuCobroCuenta(idCuenta)
    {
        const http=new XMLHttpRequest();
        const url = '../itemsCuentas/itemsCuentas.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("idCuentaActual").value= idCuenta;
                // document.getElementById("divItemsCuenta").innerHTML = '';
                document.getElementById("modalCuentasBody").innerHTML = this.responseText;
                document.getElementById("valorPagado").value='';
                colocarFocoValorPAgado();
                

                // document.getElementById("cantidad").focus();
            }
        };

        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=formuCobroCuenta"
        + "&idCuenta="+idCuenta
        // + "&tipoMov=1"
        );
        colocarFocoValorPAgado();
    }

    function colocarFocoValorPAgado()
    {
           document.getElementById("valorPagado").focus();
    }

    function eliminarItemCuenta(idItem)
    {
        // alert('idItem'+idItem); 
        var idCuenta =  document.getElementById("idCuentaActual").value;
        const http=new XMLHttpRequest();
        const url = '../itemsCuentas/itemsCuentas.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                // document.getElementById("idCuentaActual").value= idCuenta;
                // document.getElementById("divItemsCuenta").innerHTML = this.responseText;
            }
        };

        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=eliminarItemCuenta"
        + "&idItem="+idItem
        + "&idCuenta="+idCuenta
        );
        mostrarGrupos();
        setTimeout(() => {
            listarItemsCuentaExistente(idCuenta)
        }, 300);
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
