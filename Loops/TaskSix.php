<?php
//Loops/TaskSix.php
//6. Напишете вложени цикли, които извеждат таблицата от прикачения файл table.png 
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Table</title>
    </head>
    <body>
        <table class="table-bordered">
            <!--Дефинира таблица с 10 реда-->
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <tr>
                    <!--Всяка клетка от даден ред се запълва от число
                    като за всеки ред стойностите на числата се изчисляват така,
                    че да се увеличават със стойност, отговаряща на номера на реда.
                    Условието $j <= 10*$i задава граница до кое число да изчислява.-->
                    <?php for ($j = $i; $j <= 10 * $i; $j += $i): ?>
                        <td> <?= $j; ?> </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </body>
</html>

<!-- 
ред 1 -> i=1, j=1, докато j<=10*1, реда се запълва със стъпка j+=$i ->1,2,3,..10
ред 2 -> i=2, j=2, докато j<=10*2, реда се запълва със стъпка j+=$i ->2,4,6...20
.............
ред 10 ->i=10, j=10, докато j<=100, реда се запълва със стъпка j+=$i ->10,20,30,..100
-->