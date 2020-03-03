<?php
include 'includes/autoloader.inc.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="color-change-5x">
<form action="includes/calc.inc.php" method="post"  class="color-change-3x">
    <h2 class="text-pop-up-top">My Owner calculator</h2>
    <input type="number" name="num1" placeholder="First Number">
    <select name="oper" id="">
        <option value="add">Addition</option>
        <option value="sub">Subtraction </option>
        <option value="div">Division </option>
        <option value="mul">Multyplication</option>
    </select>     
    <input type="number" name="num2" placeholder="Second Number">
  
<button name="submit" class="rotate-button">
  <span class="rotate-button-face edit ">Calc</span>
  <span class="rotate-button-face-back edit">See result</span>
</button>
</form>

</body>
</html>
