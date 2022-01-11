<?php
$a = 'задание выполнено на';
$b = 100;
$c = '%'; 
?>

<?php
$y = 'Максимальное количество баллов за задание:';
$x = 20;
?> 

<?php
  $points = 20;

  if($points >= 0 && $points <= 20)
      $d = 'За выполнение вы получите от 0 до 20 баллов';
?>

 <?php
 $name = "Аэлита,";
 function getName() {
   global $name;
 }
 getName(); 
 echo $name;
 ?>

 <?php
 $num1 = 18;
 $num2 = $num1 + 10;
 ?>

<?php
define('MY_CONST', 'А это - Константа');
?>
