
<?php

// A function that takes a certain operation as a string in its parameter (example: “10 * 5”) and evaluates the operation to get the result (no built-in functions allowed)

function evaluateOperation($operation) {
   
    $operands = array();
    $operators = array();
    $currentOperand = '';
    for ($i = 0; $i < strlen($operation); $i++) {
        $char = $operation[$i];
        if ($char === '+' || $char === '-' || $char === '*' || $char === '/') {
           
            $operands[] = (float)$currentOperand;
            $operators[] = $char;
            $currentOperand = '';
        } else {
           
            $currentOperand .= $char;
        }
    }
    
    $operands[] = (float)$currentOperand;

    
    $result = $operands[0];
    for ($i = 0; $i < count($operators); $i++) {
        $operator = $operators[$i];
        $operand = $operands[$i + 1];

        
        switch ($operator) {
            case '+':
                $result += $operand;
                break;
            case '-':
                $result -= $operand;
                break;
            case '*':
                $result *= $operand;
                break;
            case '/':
                if ($operand == 0) {
                    return "Error: Division by zero!";
                }
                $result /= $operand;
                break;
            default:
                return "Error: Invalid operator!";
        }
    }

    return $result;
}


$operation = "10 * 5";
echo "Result: " . evaluateOperation($operation);
?>
