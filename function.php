<?php
  $ahmedsalary = -4000;
  $ahmedtax = 0.02;
   
  function calculatenetsalary($salary, $tax)
 {

 	if ((is_float($salary) || is_int($salary)) &&
 		is_float($tax) && $tax <= 0.02) {
 		$salary = abs($salary);
        $tax = abs($tax);
 		return $netsalary =  $salary - ($salary * $tax);
 	}	   
 } 
 $ahmedsalary = calculatenetsalary($ahmedsalary, $ahmedtax); 
 //echo $ahmedsalary;

function tothepower($number,$power){
  if (is_int($number) && is_int($power)) {
    $number = abs($number);
    $power = abs($power);
     $result = 1;
  for ($i=0; $i < $power ; $i++) { 
         $result *= $number;
        }
        return $result;
     }
}
 //echo tothepower(3,2); 

function cryptusername($username){
  if (is_string($username)) {
    $shortUsername = substr($username, 0, 8);
     //echo $shortUsername;
     return md5($shortUsername);
  }
}
echo cryptusername('mohamedadelmohsenmousa');




?>
