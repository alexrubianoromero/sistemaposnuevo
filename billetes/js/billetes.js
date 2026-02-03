   function sumarValorPagado(valor)
    {

         var totalItems =  document.getElementById("totalItems").value;
         var valorPagado =  document.getElementById("valorPagado").value;
         if(valorPagado==''){valorPagado=0;}
         var nuevoValor = parseInt(valorPagado) + parseInt(valor);

          var saldo = parseInt(totalItems)-parseInt(nuevoValor);
         if(valorPagado==''){valorPagado=0;}
        //  alert('click en sumar billete '+ totalItems);
         document.getElementById("valorPagado").value = nuevoValor;
        //  var devuelto = parseInt(totalItems)-parseInt(nuevoValor);

          if(saldo<0)
          {   saldo = 0;
              var devuelto = -(parseInt(totalItems)-parseInt(nuevoValor));
          }else{
            var devuelto =0;
          }
         document.getElementById("saldo").value = saldo;
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

   