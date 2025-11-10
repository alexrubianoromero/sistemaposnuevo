   function registrarVenta(idCuenta)
    {
        var validaInfoVenta = validarInfoVenta();
        if(validaInfoVenta)
        {

            // alert('idproducto'+idProducto); 
            var valorPagado =  document.getElementById("valorPagado").value;
            var valorDevuelto =  document.getElementById("valorDevuelto").value;
            var idFormaPago =  document.getElementById("idFormaPago").value;
            const http=new XMLHttpRequest();
            const url = '../ventas/ventas.php';
            http.onreadystatechange = function(){
                if(this.readyState == 4 && this.status ==200){
                    document.getElementById("modalCuentasBody").innerHTML = this.responseText;
                    // document.getElementById("cantidad").focus();
                }
            };
            
            http.open("POST",url);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.send("opcion=registrarVenta"
                // + "&idProducto="+idProducto
                + "&idCuenta="+idCuenta
                + "&valorPagado="+valorPagado
                + "&valorDevuelto="+valorDevuelto
                + "&idFormaPago="+idFormaPago
                // + "&tipoMov=1"
            );
        }
    }


    
function  validarInfoVenta()
{
        if( document.getElementById('valorPagado').value == ''){
            alert('Por favor verifique valorPagado');
            document.getElementById('valorPagado').focus();
            return 0;
        }
        if( document.getElementById('valorDevuelto').value == ''){
            alert('Por favor verifique valorDevuelto');
            document.getElementById('valorDevuelto').focus();
            return 0;
        }
        if( document.getElementById('idFormaPago').value == ''){
            alert('Por favor verifique FormaPago');
            document.getElementById('idFormaPago').focus();
            return 0;
        }
        return 1;
}
