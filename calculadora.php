<?php
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case 'add':
            $result = $num1 + $num2;
            break;

        case 'subtract':
            $result = $num1 - $num2;
            break;

        case 'multiply':
            $result = $num1 * $num2;
            break;

        case 'divide':
            if ($num2 == 0) {
                echo "Erro: Divisão por zero";
            } else {
                $result = $num1 / $num2;
            }
            break;

        default:
            $result = 0;
    }

    echo "O resultado é: " . $result;
}

