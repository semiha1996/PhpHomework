<?php

//Loops/TaskFour.php

//Напишете вложени for цикли, които извеждат следното:
//    *
//    * *
//    * * *
//    * * * *
//    * * * * *  //триъгълник 1
//    * * * * *  //триъгълник 2
//    * * * *
//    * * *
//    * *
//    *

//rows - редове , cols - колони

//Триъгълник 1
//Определя се броят редове (5)
for($rows = 0; $rows <= 5; $rows++){
    //Определя се броя на колоните според условието $cols<=$rows.
   for($cols = 1; $cols <= $rows; $cols++) { 
       echo '*';//Принтира символите
   }
   echo '</br>';
}

//Триъгълник 2
//Принтира се приъгълник 1 в обратен ред като се започва с 5 символа на 1ви ред 
//и се намалява броя принтирани символи след всяка итерация.
for($rows = 5; $rows >= 1; $rows--){
   for($cols = 1; $cols <= $rows; $cols++) { 
       echo '*';
   }
   echo '</br>';
}
