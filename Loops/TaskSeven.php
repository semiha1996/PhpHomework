<?php

//Loops/TaskSeven.php

//Напишете цикли, които извеждат "триъгълници на Флойд" с 5, 10 и 21 реда. 

/*
//Триъгълник на Флойд с 5 реда
//Определяне на броя редове
$number = 1;// дефинира числото, което е в начало на триъгълника
    for($i=1; $i<=5; $i++){
        
//Определя колко числа ще се изпишат на един ред взависимост от стойността на $i
       for($j=1; $j<=$i; $j++) { 
           echo $number++. ' ';//след всяка итерация числото се инкрементира с 1
       }
       echo '</br>';
    }


         $number2 = 1;
   //Триъгълник на Флойд с 10 реда
     for($i=1; $i<=10; $i++){
       for($j=1; $j<=$i; $j++) { 
           echo $number++.' ';
       }
       echo '</br>';
    }
    
    //Триъгълник на Флойд с 21 реда
    
         $number3 = 1;
    for($i=1; $i<=21; $i++){
          for($j=1; $j<=$i; $j++) { 
              echo $number++.' ';
          }
          echo '</br>';
       }
*/
       
    //Решение с функция
        
    function FloydTriangles($rows){
         $number = 1;
           for($i=1; $i<=$rows; $i++){
        
          for($j=1; $j<=$i; $j++) { 
              echo $number++.' ';
          }
          echo '</br>';
       }
    }
    
    FloydTriangles(5);
    
    FloydTriangles(10);
    
    FloydTriangles(21);
    
     