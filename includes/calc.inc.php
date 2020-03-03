<?php

include 'autoloader.inc.php';
$oper = $_POST['oper'];
$num1 = (int)$_POST['num1'];
$num2 = (int)$_POST['num2'];
$calc = new Calc($oper,$num1,$num2);

try{
echo $calc->calculator()."<br>";
echo  "<a href='../index.php'>Back</a>";

}catch(TypeError $e){
echo "Error!: " .$e->getMessage();
echo  "<a href='../index.php'>Back</a>";
}

?>
