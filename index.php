<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calculadora</title>

    <style>

        /* =========================
           RESET
        ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }


        /* =========================
           BODY
        ========================= */

        body {
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            background:
                radial-gradient(circle at 20% 20%, #2563eb55, transparent 30%),
                radial-gradient(circle at 80% 80%, #9333ea55, transparent 30%),
                linear-gradient(135deg, #050816, #0f172a, #111827);

            color: white;

            overflow: hidden;
        }


        /* =========================
           BACKGROUND
        ========================= */

        .background {
            position: fixed;
            inset: 0;
            overflow: hidden;
            z-index: -1;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.5;
        }

        .circle-1 {
            width: 300px;
            height: 300px;

            background: #2563eb;

            top: -100px;
            left: -100px;
        }

        .circle-2 {
            width: 350px;
            height: 350px;

            background: #7c3aed;

            bottom: -150px;
            right: -100px;
        }


        /* =========================
           CONTAINER
        ========================= */

        .container {
            width: 100%;
            max-width: 480px;

            padding: 25px;
        }


        /* =========================
           HEADER
        ========================= */

        .header {
            text-align: center;
            margin-bottom: 25px;
        }

        .header h1 {
            font-size: 42px;
            font-weight: 800;

            letter-spacing: 4px;

            background: linear-gradient(
                90deg,
                #60a5fa,
                #a78bfa,
                #f472b6
            );

            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

            text-shadow: 0 0 30px rgba(96,165,250,0.15);
        }

        .header p {
            margin-top: 8px;

            color: #94a3b8;

            font-size: 14px;

            letter-spacing: 1px;
        }


        /* =========================
           CALCULATOR
        ========================= */

        .calculator {

            padding: 25px;

            border-radius: 30px;

            background: rgba(15, 23, 42, 0.70);

            border: 1px solid rgba(255,255,255,0.12);

            backdrop-filter: blur(20px);

            box-shadow:
                0 30px 80px rgba(0,0,0,0.45),
                inset 0 1px 1px rgba(255,255,255,0.08);

            animation: aparecer 0.7s ease;
        }

        @keyframes aparecer {

            from {
                opacity: 0;
                transform: translateY(30px) scale(0.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }

        }


        /* =========================
           DISPLAY
        ========================= */

        .display {

            min-height: 125px;

            padding: 20px;

            margin-bottom: 20px;

            border-radius: 20px;

            background: rgba(2, 6, 23, 0.75);

            border: 1px solid rgba(255,255,255,0.08);

            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-end;

            overflow: hidden;

            box-shadow:
                inset 0 5px 20px rgba(0,0,0,0.3);
        }

        .previous-operation {

            color: #64748b;

            font-size: 15px;

            min-height: 22px;

            margin-bottom: 5px;

            overflow: hidden;

            max-width: 100%;

            white-space: nowrap;
        }

        .current-operation {

            font-size: 42px;

            font-weight: 700;

            color: #f8fafc;

            max-width: 100%;

            overflow: hidden;

            white-space: nowrap;

            text-overflow: ellipsis;
        }


        /* =========================
           BUTTONS
        ========================= */

        .buttons {

            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 12px;
        }

        button {

            height: 70px;

            border: none;

            border-radius: 18px;

            background: rgba(30, 41, 59, 0.9);

            color: white;

            font-size: 22px;

            font-weight: 600;

            cursor: pointer;

            transition:
                transform 0.15s ease,
                background 0.15s ease,
                box-shadow 0.15s ease;

            box-shadow:
                0 5px 12px rgba(0,0,0,0.2);
        }

        button:hover {

            background: #334155;

            transform: translateY(-3px);

            box-shadow:
                0 8px 20px rgba(0,0,0,0.3);
        }

        button:active {

            transform: scale(0.93);
        }


        /* =========================
           OPERATOR BUTTONS
        ========================= */

        .operator {

            background: linear-gradient(
                135deg,
                #2563eb,
                #4f46e5
            );

            box-shadow:
                0 5px 20px rgba(37,99,235,0.25);
        }

        .operator:hover {

            background: linear-gradient(
                135deg,
                #3b82f6,
                #6366f1
            );
        }


        /* =========================
           CLEAR
        ========================= */

        .clear {

            background: linear-gradient(
                135deg,
                #dc2626,
                #e11d48
            );
        }

        .clear:hover {

            background: linear-gradient(
                135deg,
                #ef4444,
                #f43f5e
            );
        }


        /* =========================
           DELETE
        ========================= */

        .delete {

            background: rgba(71,85,105,0.9);

            color: #cbd5e1;
        }


        /* =========================
           EQUAL
        ========================= */

        .equals {

            grid-column: span 2;

            background: linear-gradient(
                135deg,
                #8b5cf6,
                #d946ef
            );

            box-shadow:
                0 5px 25px rgba(139,92,246,0.3);
        }

        .equals:hover {

            background: linear-gradient(
                135deg,
                #a78bfa,
                #e879f9
            );
        }


        /* =========================
           FOOTER
        ========================= */

        .footer {

            text-align: center;

            margin-top: 20px;

            color: #64748b;

            font-size: 12px;

            letter-spacing: 1px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 500px) {

            body {
                overflow-y: auto;
            }

            .container {
                padding: 15px;
            }

            .header h1 {
                font-size: 32px;
            }

            .calculator {
                padding: 18px;
                border-radius: 24px;
            }

            button {
                height: 62px;
                border-radius: 15px;
                font-size: 20px;
            }

            .current-operation {
                font-size: 34px;
            }

        }

    </style>
</head>


<body>

    <!-- Fundo decorativo -->

    <div class="background">

        <div class="circle circle-1"></div>

        <div class="circle circle-2"></div>

    </div>


    <div class="container">

        <!-- Cabeçalho -->

        <header class="header">

            <h1>CALCULADORA</h1>

            <p>Simples • Rápida • Inteligente</p>

        </header>


        <!-- Calculadora -->

        <main class="calculator">


            <!-- Display -->

            <div class="display">

                <div
                    class="previous-operation"
                    id="previousOperation">
                </div>

                <div
                    class="current-operation"
                    id="currentOperation">
                    0
                </div>

            </div>


            <!-- Botões -->

            <div class="buttons">


                <!-- Primeira linha -->

                <button
                    class="clear"
                    onclick="clearCalculator()">
                    C
                </button>

                <button
                    class="delete"
                    onclick="deleteNumber()">
                    ⌫
                </button>

                <button
                    class="operator"
                    onclick="chooseOperator('%')">
                    %
                </button>

                <button
                    class="operator"
                    onclick="chooseOperator('/')">
                    ÷
                </button>


                <!-- Segunda linha -->

                <button onclick="addNumber('7')">
                    7
                </button>

                <button onclick="addNumber('8')">
                    8
                </button>

                <button onclick="addNumber('9')">
                    9
                </button>

                <button
                    class="operator"
                    onclick="chooseOperator('*')">
                    ×
                </button>


                <!-- Terceira linha -->

                <button onclick="addNumber('4')">
                    4
                </button>

                <button onclick="addNumber('5')">
                    5
                </button>

                <button onclick="addNumber('6')">
                    6
                </button>

                <button
                    class="operator"
                    onclick="chooseOperator('-')">
                    −
                </button>


                <!-- Quarta linha -->

                <button onclick="addNumber('1')">
                    1
                </button>

                <button onclick="addNumber('2')">
                    2
                </button>

                <button onclick="addNumber('3')">
                    3
                </button>

                <button
                    class="operator"
                    onclick="chooseOperator('+')">
                    +
                </button>


                <!-- Quinta linha -->

                <button onclick="addNumber('0')">
                    0
                </button>

                <button onclick="addDecimal()">
                    .
                </button>

                <button
                    class="equals"
                    onclick="calculate()">
                    =
                </button>

            </div>

        </main>


        <div class="footer">

            Calculadora Web • Desenvolvida com HTML, CSS e JavaScript

        </div>

    </div>



    <script>

        let currentNumber = "";
        let previousNumber = "";
        let operator = null;


        const currentDisplay =
            document.getElementById("currentOperation");

        const previousDisplay =
            document.getElementById("previousOperation");


        /* =========================
           ADICIONAR NÚMERO
        ========================= */

        function addNumber(number) {

            if (currentNumber === "0") {

                currentNumber = number;

            } else {

                currentNumber += number;

            }

            updateDisplay();
        }


        /* =========================
           DECIMAL
        ========================= */

        function addDecimal() {

            if (currentNumber === "") {

                currentNumber = "0.";

            }

            else if (!currentNumber.includes(".")) {

                currentNumber += ".";

            }

            updateDisplay();
        }


        /* =========================
           ESCOLHER OPERAÇÃO
        ========================= */

        function chooseOperator(selectedOperator) {

            if (currentNumber === "" && previousNumber === "") {
                return;
            }

            if (previousNumber !== "" && currentNumber !== "") {

                calculate();

            }

            operator = selectedOperator;

            previousNumber = currentNumber;

            currentNumber = "";

            updateDisplay();

        }


        /* =========================
           CALCULAR
        ========================= */

        function calculate() {

            if (
                previousNumber === "" ||
                currentNumber === "" ||
                operator === null
            ) {
                return;
            }

            const previous =
                parseFloat(previousNumber);

            const current =
                parseFloat(currentNumber);

            let result;


            switch (operator) {

                case "+":
                    result = previous + current;
                    break;

                case "-":
                    result = previous - current;
                    break;

                case "*":
                    result = previous * current;
                    break;

                case "/":

                    if (current === 0) {

                        currentDisplay.innerText =
                            "Erro";

                        previousDisplay.innerText =
                            "Não é possível dividir por zero";

                        currentNumber = "";
                        previousNumber = "";
                        operator = null;

                        return;
                    }

                    result = previous / current;

                    break;

                case "%":

                    result =
                        previous % current;

                    break;

                default:
                    return;

            }


            previousDisplay.innerText =
                `${previous} ${getOperatorSymbol(operator)} ${current} =`;


            currentNumber =
                Number(result.toFixed(10)).toString();


            previousNumber = "";

            operator = null;

            updateDisplay();

        }


        /* =========================
           SÍMBOLO DA OPERAÇÃO
        ========================= */

        function getOperatorSymbol(operator) {

            switch (operator) {

                case "*":
                    return "×";

                case "/":
                    return "÷";

                case "-":
                    return "−";

                case "+":
                    return "+";

                case "%":
                    return "%";

                default:
                    return "";

            }

        }


        /* =========================
           APAGAR
        ========================= */

        function deleteNumber() {

            currentNumber =
                currentNumber.slice(0, -1);

            updateDisplay();

        }


        /* =========================
           LIMPAR
        ========================= */

        function clearCalculator() {

            currentNumber = "";
            previousNumber = "";
            operator = null;

            previousDisplay.innerText = "";

            updateDisplay();

        }


        /* =========================
           ATUALIZAR DISPLAY
        ========================= */

        function updateDisplay() {

            currentDisplay.innerText =
                currentNumber || "0";

        }


        /* =========================
           TECLADO
        ========================= */

        document.addEventListener(
            "keydown",
            function(event) {

                const key = event.key;


                if (!isNaN(key)) {

                    addNumber(key);

                }


                if (key === ".") {

                    addDecimal();

                }


                if (
                    key === "+" ||
                    key === "-" ||
                    key === "*" ||
                    key === "/"
                ) {

                    chooseOperator(key);

                }


                if (key === "Enter" || key === "=") {

                    calculate();

                }


                if (key === "Backspace") {

                    deleteNumber();

                }


                if (key === "Escape") {

                    clearCalculator();

                }

            }
        );

    </script>

</body>
</html>













































































