<?php //тернарный оператор (эквиваленто выражению: if (isset($_POST['row']) $row = $_POST['row']; else $row = 1;)
    $row = $_POST['row'] ?? 1;
    $col = $_POST['col'] ?? 1;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5. Работа с таблицами PHP</title>
</head>
<style>
    td {
        width: 20px;
        height: 20px;
    }
</style>
<body>
<b>Работа с таблицами.</b> <br>
Используя среду разработки HTML и PHP разработать сайт демонстрирующий умение работать с таблицами. <br>
Приложение должно: <br>
- Вводить числовые данные в поле ввода <br>
- По нажатию кнопки №1 выводить таблицу на форму с указанными пользователем количеством столбцов и строк <br>
- По нажатию кнопки №2 заполнять таблицу случайными числами <br>
- По нажатию кнопки №3 выводить только четные числа с таблицы. <br> <br>

<form method='post'>
    <input type='submit' name='btn_1' value='№1'>
    <input type='submit' name='btn_2' value='№2'>
    <input type='submit' name='btn_3' value='№3'>
    <br>
    <b>Введите количество строк и столбцов для таблицы: </b><br>

    <label>Количество строк: <input type='number' name='row' min='1' max='20' value="<?= $row; ?>"></label><br>
    <label>Количество столбцов: <input type='number' name='col' min='1' max='20'value="<?= $col; ?>"></label> 
</form>

<?php
function table($row, $col) {
    $table = "<table border=1>";
    $i = 1;
    $arr = create_array($row, $col);
    
    while($i <= $row) {
        $table .= "<tr>";
        $j = 1;
        while($j <= $col) {
            if (isset($_POST['btn_2'])) {
                $table .= "<td>" . $arr[$i-1][$j-1]. "</td>";
            } else if (isset($_POST['btn_3'])) {
                $table .= "<td>" . (($arr[$i-1][$j-1] % 2) ? '' :  $arr[$i-1][$j-1]) . "</td>";
            } else {
                $table .= "<td></td>";
            }
            $j++;
        }
        $table .= "</tr>";
        $i++;
    }
    $table .= "</table>";
    return $table;
}

function create_array($row, $col) {
    $arr = array();
    for ($i = 0; $i < $row; $i++){
        for ($j = 0; $j < $col; $j++){
            $arr[$i][$j] = rand(0, 100);
        }
    }
    return $arr;
}

if (isset($_POST['btn_1']) || isset($_POST['btn_2']) || isset($_POST['btn_3'])) {
    $table = table($row, $col);
    echo $table;
}
?>
</body>
</html>