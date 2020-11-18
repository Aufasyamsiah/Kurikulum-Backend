<?php
function calc($input1,  $input2, $operator) 
{
   if($operator == "+".PHP_EOL) {
       echo $input1 + $input2;
       echo PHP_EOL;

   }elseif($operator == "-") {
       echo $input1 - $input2;
       echo PHP_EOL;

   }elseif($operator == "*") {
       echo $input1 * $input2;
       echo PHP_EOL;

   }elseif($operator == "/") {
       echo $input1 / $input2;
       echo PHP_EOL;   
   }else{
       echo "operator yang anda masukan salah";
   }
}

$tes = '+'.PHP_EOL;
var_dump($tes);

echo"======= calculator =======";
echo PHP_EOL;

echo"input data pertama =";
$input1 =(int) fgets(STDIN);
var_dump($input1);
echo "input operator =";
$operator=(string)fgets(STDIN);
var_dump($operator);
echo "input data kedua =";
$input2 =(int)fgets (STDIN);

echo "hasil ";
calc ($input1 , $input2 , $operator);