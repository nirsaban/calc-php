<?php



class Calc{
public $oprator;
public $num1;
public $num2;
public function __construct($oprator,$num1,$num2){
    $this->oprator = $oprator;
    $this->num1 = $num1;
    $this->num2 = $num2; 
}
public function calculator(){
    switch($this->oprator){
     case 'add';
     $result = $this->num1 + $this->num2;
     return $result;
    break;
    case 'sub';
    $result = $this->num1 - $this->num2;
    return $result;
   break;
   case 'div';
   $result = $this->num1 / $this->num2;
   return $result;
  break;
  case 'mul';
  $result = $this->num1 * $this->num2;
  return $result;
  break;
  default:
  echo "Somthing warng";
    }
}
}