<?php 
if(isset($_GET['operation'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $sign = $_GET['operation'];

    switch($sign) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = $num1 / $num2;
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4. Калькулятор PHP</title>
</head>
<body>
    <b>Калькулятор.</b> <br>
    Используя среду разработки HTML и php разработать Приложение калькулятор. Приложение должно: <br>
    –Вводить числовые данные в поле ввода <br>
    –Производить простейшие арифметические вычисления <br>
    Результаты вычисления должны производиться на языке PHP. <br><br>
<form action="" method="get">
    <div>
        <label for="num1">Num 1</label>
        <input type="number" name="num1" id="num1" value="<?= $num1; ?>" required>
    </div>
    <div>
        <label for="num2">Num 2</label>
        <input type="number" name="num2" id="num2" value="<?= $num2; ?>" required>
    </div>
    <div>
        <label for="result">result</label>
        <input type="number" name="result" id="result" value="<?= $result; ?>" disabled>
    </div>
    <!-- Операции -->
    <div>
        <input type="submit" name="operation" value="+">
        <input type="submit" name="operation" value="-">
        <input type="submit" name="operation" value="*">
        <input type="submit" name="operation" value="/">
    </div>
</form>
</body>
</html>