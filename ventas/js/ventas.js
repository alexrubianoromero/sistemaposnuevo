   function registrarVenta(idCuenta)
    {
        // alert('idproducto'+idProducto); 
        //  var idCuenta =  document.getElementById("idCuentaActual").value;
        const http=new XMLHttpRequest();
        const url = '../ventas/ventas.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("divItemsCuenta").innerHTML = this.responseText;
                // document.getElementById("cantidad").focus();
            }
        };

        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=registrarVenta"
        // + "&idProducto="+idProducto
        + "&idCuenta="+idCuenta
        // + "&tipoMov=1"
        );
    }