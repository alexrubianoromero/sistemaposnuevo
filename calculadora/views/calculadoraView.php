<?php

class calculadoraView
{

    public function mostrarCalculadora()
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <style>
                .calculator {
                    width: 500px;
                    margin: 50px auto;
                    border: 1px solid #ccc;
                    padding: 10px;
                    box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
                    background-color: #f8f8f8;
                }

                #display {
                    width: 100%;
                    height: 50px;
                    margin-bottom: 10px;
                    font-size: 2em;
                    text-align: right;
                    padding: 0 10px;
                    box-sizing: border-box;
                }

                .keys {
                    display: grid;
                    grid-template-columns: repeat(4, 1fr); /* 4 columnas de igual tamaño */
                    gap: 10px;
                }

                .keys button {
                    padding: 10px;
                    font-size: 1.2em;
                    border: none;
                    background-color: #e0e0e0;
                    cursor: pointer;
                    border-radius: 5px;
                }

                .keys button:hover {
                    background-color: #d0d0d0;
                }

            </style>
        </head>
        <body>
            <!-- <button onclick="mostrarMensaje();">mmensaje</button> -->
            <div class="calculator">
                <input type="text" id="display" disabled>
                <div class="keys">
                    <button onclick="clearDisplay()">C</button>
                    <button onclick="appendOperator('/')">/</button>
                    <button onclick="appendOperator('*')">*</button>
                    <button onclick="calculateResult()">=</button>

                    <button onclick="appendNumber('7')">7</button>
                    <button onclick="appendNumber('8')">8</button>
                    <button onclick="appendNumber('9')">9</button>
                    <button onclick="appendOperator('-')">-</button>

                    <button onclick="appendNumber('4')">4</button>
                    <button onclick="appendNumber('5')">5</button>
                    <button onclick="appendNumber('6')">6</button>
                    <button onclick="appendOperator('+')">+</button>

                    <button onclick="appendNumber('1')">1</button>
                    <button onclick="appendNumber('2')">2</button>
                    <button onclick="appendNumber('3')">3</button>
                    <button onclick="appendNumber('0')">0</button>
                    <button onclick="appendNumber('.')">.</button>
                </div>
            </div>
        </body>
        </html>
        <!-- <script src="../calculadora/js/calculadora.js"></script> -->
       <script>
     
       </script>
        <?php
    }

}

?>