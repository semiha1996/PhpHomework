<?php

//Loops/TaskThree.php

//Напишете php програма, която извежда факториела на  5, 8 и 10. 

//Деклариране на функция, в която се пресмята факториел на дадено число number
function calculateFactorial($number) {
    //Променливата, в която се запазва изчисления факториел
    $factorial = 1; 
    
    //Броят на итерациите зависи от числото number
    for($i = 1; $i <= $number; $i++){
        $factorial *= $i;
        //При $number = 3
        //*итерация 1 -> $factorial = 1*1=1
        //*итерация 2 -> $factorial = 1*2=2
        //*итерация 3 -> $factorial = 2*3=6
    }
  echo 'Factorial of '. $number . ' is ' . $factorial . '</br>';
}
// Извикваме функцията като подаваме числата, за които искаме да изчислим факториел.
calculateFactorial(5); //Factorial of 5 is 120

calculateFactorial(8); //Factorial of 8 is 40320

calculateFactorial(10);//Factorial of 10 is 3628800

?>

