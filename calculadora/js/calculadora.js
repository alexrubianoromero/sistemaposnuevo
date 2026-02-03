function appendNumber(number) {
    //    const display = document.getElementById('display');
       const display = document.getElementById('valorPagado');
        // Si la pantalla muestra 'Error', borramos antes de empezar una nueva operación
        if (display.value === 'Error') {
            display.value = '';
        }
        // Concatenamos el nuevo número o punto al valor actual
        display.value += number;
        calculeDevolucion();
    }

 function appendOperator(operator) {
        // Evita agregar un operador si la pantalla está vacía o ya termina con un operador
        const lastChar = display.value.slice(-1);
        if (display.value === '' || ['+', '-', '*', '/'].includes(lastChar)) {
            return;
        }
        display.value += operator;

    }

     function clearDisplay() {
        //  const display = document.getElementById('display');
         const display = document.getElementById('valorPagado');
        display.value = '';
        calculeDevolucion();
    }

      function calculateResult() {
        const display = document.getElementById('display');
        try {
            // La función eval() evalúa la cadena de texto como código JavaScript.
            // Es muy sencillo, pero úsala con cautela en aplicaciones más complejas.
            const result = eval(display.value);
            display.value = result;
        } catch (error) {
            // Muestra 'Error' si la expresión no es válida (ej: 5+/ )
            display.value = 'Error';
        }
    }


     function mostrarCalculadora()
    {
        // alert('enviola forma de pago ');
        // // alert('idproducto'+idProducto); 
        // //  var idFormapago =  document.getElementById("idCuentaActual").value;
        const http=new XMLHttpRequest();
        const url = '../calculadora/calculadora.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("div_de_calculadora").innerHTML = this.responseText;
                // document.getElementById("cantidad").focus();
            }
        };

        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=mostrarCalculadora"
        // + "&idProducto="+idProducto
        // + "&idCuenta="+idCuenta
        // + "&tipoMov=1"
        );
    }