 // Obtenemos la referencia al campo de visualización (la pantalla)
    const display = document.getElementById('display');

    /**
     * Agrega un número o un punto decimal a la pantalla.
     * @param {string} number El número o punto a agregar.
     */
    function appendNumber(number) {
        // Si la pantalla muestra 'Error', borramos antes de empezar una nueva operación
        if (display.value === 'Error') {
            display.value = '';
        }
        // Concatenamos el nuevo número o punto al valor actual
        display.value += number;
    }

    /**
     * Agrega un operador (+, -, *, /) a la pantalla.
     * @param {string} operator El operador a agregar.
     */
    function appendOperator(operator) {
        // Evita agregar un operador si la pantalla está vacía o ya termina con un operador
        const lastChar = display.value.slice(-1);
        if (display.value === '' || ['+', '-', '*', '/'].includes(lastChar)) {
            return;
        }
        display.value += operator;
    }

    /**
     * Borra el contenido de la pantalla.
     */
    function clearDisplay() {
        display.value = '';
    }

    /**
     * Calcula el resultado de la expresión en la pantalla.
     */
    function calculateResult() {
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