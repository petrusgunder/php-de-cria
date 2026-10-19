<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>

<div class="container">
    <h2>Calculadora</h2>

    <form action="" method="POST">
        <div class="campo">
            <label for="num1">Número 1:</label>
            <input type="number" step="any" name="num1" id="num1" value="<?php echo isset($_POST['num1']) ? htmlspecialchars($_POST['num1']) : ''; ?>" required>
        </div>

        <div class="campo">
            <label>Operação:</label>
            <div class="radio-group">
                <?php $op = $_POST['operacao'] ?? 'soma'; ?>
                <label><input type="radio" name="operacao" value="soma" <?php echo $op === 'soma' ? 'checked' : ''; ?>> Soma</label>
                <label><input type="radio" name="operacao" value="subtracao" <?php echo $op === 'subtracao' ? 'checked' : ''; ?>> Subtração</label>
                <label><input type="radio" name="operacao" value="multiplicacao" <?php echo $op === 'multiplicacao' ? 'checked' : ''; ?>> Multiplicação</label>
                <label><input type="radio" name="operacao" value="divisao" <?php echo $op === 'divisao' ? 'checked' : ''; ?>> Divisão</label>
            </div>
        </div>

        <div class="campo">
            <label for="num2">Número 2:</label>
            <input type="number" step="any" name="num2" id="num2" value="<?php echo isset($_POST['num2']) ? htmlspecialchars($_POST['num2']) : ''; ?>" required>
        </div>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacao'])) {
            
            $num1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
            $num2 = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT);
            $operacao = $_POST['operacao'];

            if ($num1 !== false && $num2 !== false) {
                $resultado = null;
                $erro = null;
                $simbolo = '';

                switch ($operacao) {
                    case 'soma':
                        $resultado = $num1 + $num2;
                        $simbolo = '+';
                        break;
                    case 'subtracao':
                        $resultado = $num1 - $num2;
                        $simbolo = '-';
                        break;
                    case 'multiplicacao':
                        $resultado = $num1 * $num2;
                        $simbolo = '×';
                        break;
                    case 'divisao':
                        if ($num2 == 0) {
                            $erro = "Não é possível realizar divisão por zero!";
                        } else {
                            $resultado = $num1 / $num2;
                            $simbolo = '÷';
                        }
                        break;
                    default:
                        $erro = "Operação inválida.";
                        break;
                }

                if ($erro) {
                    echo "<div class='erro'><strong>Erro:</strong> {$erro}</div>";
                } else {
                    echo "<div class='resultado'><strong>Resultado:</strong> {$num1} {$simbolo} {$num2} = {$resultado}</div>";
                }
            } else {
                echo "<div class='erro'>Por favor, preencha números válidos.</div>";
            }
        }
    }
    ?>
</div>

</body>
</html>