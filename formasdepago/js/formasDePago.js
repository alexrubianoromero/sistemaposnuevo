   function enviarFormaDePago(valor)
    {
        // // alert('idproducto'+idProducto); 
        // var idFormapago =  document.getElementById("idFormaPago").value;
        // alert('enviola forma de pago 123 '+valor);
        if(valor==1)
        {
            //  alert('digito efectivo  '+valor);
            mostrarCalculadora();
         }else
        //   if(valor==2)
        {
            //  alert('digito efectivo  '+valor);
            document.getElementById("div_de_calculadora").innerHTML = '';
         }
         
        // const http=new XMLHttpRequest();
        // const url = '../formasdepago/itemsCuentas.php';
        // http.onreadystatechange = function(){
        //     if(this.readyState == 4 && this.status ==200){
        //         document.getElementById("divItemsCuenta").innerHTML = this.responseText;
        //         // document.getElementById("cantidad").focus();
        //     }
        // };

        // http.open("POST",url);
        // http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        // http.send("opcion=agregarItemACuenta123456"
        // + "&idProducto="+idProducto
        // + "&idCuenta="+idCuenta
        // // + "&tipoMov=1"
        // );
    }