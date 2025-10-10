   function sumarValorPagado(valor)
    {

         var totalItems =  document.getElementById("totalItems").textContent;
         var valorPagado =  document.getElementById("valorPagado").value;
          var nuevoValor = parseInt(valorPagado) + parseInt(valor);
        //  alert('click en sumar billete '+ totalItems);
         document.getElementById("valorPagado").value = nuevoValor;
         var devuelto = parseInt(totalItems)-parseInt(nuevoValor);
         document.getElementById("valorDevuelto").value = devuelto;


        // const http=new XMLHttpRequest();
        // const url = '../itemsCuentas/itemsCuentas.php';
        // http.onreadystatechange = function(){
        //     if(this.readyState == 4 && this.status ==200){
        //         document.getElementById("idCuentaActual").value= idCuenta;
        //         // document.getElementById("divItemsCuenta").innerHTML = '';
        //         document.getElementById("modalCuentasBody").innerHTML = this.responseText;
        //         // document.getElementById("cantidad").focus();
        //     }
        // };

        // http.open("POST",url);
        // http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        // http.send("opcion=formuCobroCuenta"
        // + "&idCuenta="+idCuenta
        // // + "&tipoMov=1"
        // );
    }