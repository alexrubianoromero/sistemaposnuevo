 function traerProductosIdGrupo(idGrupo){
    // alert('idgrupo de producto'+idGrupo);
        const http=new XMLHttpRequest();
        const url = '../productos/productos.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("columncentral").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=traerProductosIdGrupo"
        + "&idGrupo="+idGrupo
        // + "&tipoMov=2"
        );
    }
//  function pantallaAgregarProducto(idProducto)
//  {
//     // alert('idgrupo de producto'+idGrupo);
//     var validaCuenta = validarCuentaActiva();
//     if(validaCuenta)
//     {
//         var idCuentaActual =  document.getElementById("idCuentaActual").value;
//         const http=new XMLHttpRequest();
//         const url = '../productos/productos.php';
//         http.onreadystatechange = function(){
//             if(this.readyState == 4 && this.status ==200){
//                 document.getElementById("modalBodyProducto").innerHTML = this.responseText;
//             }
//         };
        
//         http.open("POST",url);
//         http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//         http.send("opcion=pantallaAgregarProducto"
//         + "&idProducto="+idProducto
//         + "&idCuentaActual="+idCuentaActual
//         // + "&tipoMov=2"
//         );
//     }   
// }



    function validarCuentaActiva()
    {
            if(document.getElementById("idCuentaActual").value=='')
            {
                alert('Debe haber una cuenta activa');
                return false;
            }
            return true;
    }


