<?php
// // if & else
// $isLoggedIn = true;
// if ($isLoggedIn === true) {
//     echo '<p>welcome to my website</p>';
//     echo '<p>you are late</p>';
// }

// $playerAge = 30;
// if($playerAge <= 32){
//     echo 'the player can still play in our team';
// }

// $experince = 2;
// $cert = true;
// $project = 15;
// if(($experince >= 5 && $cert === true) || $project >=15) {
//     echo '<p>you can join our team</p>';
// }

// $points = 2000;
// if ($points >= 100 && $points <200){
//     echo 'you are jonuir';
// }elseif ($points >= 200  && $points <300) {
//     echo 'you are mid';
// }elseif ($points >= 300  && $points <400) {
//     echo 'you are sinor';
// } elseif ($points >= 400 ) {
//     echo 'you are team leader';
// }else {
//     echo 'you need to stude more';
// }

// // switch

// $carSpead = 100;
// switch ($carSpead){
//     case 100:
//         echo '<p>you will paid 100 L.E</p>';
//         break;
//     case 200:
//         echo '<p>you will paid 200 L.E</p>';
//         break;
//     case 300:
//         echo '<p>you will paid 300 L.E</p>';
//         break;
//     case 400:
//         echo '<p>you will go to jail</p>';
//         break;
//     default:
//         echo ' sorry unknoen speed';
// }

// // loops
// // while

// $playerAge = 24;
// while($playerAge <=32) {
//     echo '<p>' . 'the player age is '. $playerAge . 'he can stil play' . '</p>';
//     $playerAge ++;
// }

// $temp = 10;
// while($temp >= 3) {
//     echo '<p>' . 'i can still survive the tempreature is ' . $temp . '</p>';
//     $temp --;
// }

// // do-while
// $students = 15;
// do {
//     echo 'give a brake';
//     $students--;
// } while ($students <= 10);


// $dagre = 115 ;

// if ($dagre >= 85){
//     echo 'your degre is ' . $dagre . ' you have (A) (exclent) you succeed';
// }elseif ($dagre >= 75) {
//     echo 'your degre is ' . $dagre . ' you have (B) ( very good) you succeed ';
// } elseif ($dagre >= 65) {
//     echo 'your degre is ' . $dagre . ' you have (C) (good) you succeed';
// } elseif ($dagre >= 50){ 
//     echo 'your degre is ' . $dagre . ' you have (D) you succeed';
// }else{
//     echo 'you faill';
// }
 

for ($i=1;$i<= 12;$i++){
    if ($i == 6){
        echo 'mohamed adel abd-elmohsen' . '<br>';
        
    }else{
        echo $i . '<br>';
    }
}

for ($i=1; $i<9; $i++){
    echo '<br>';
for($x=1; $x<$i; $x++){
         echo '*';        
    }
}
// =======================
 
// function sum($n1,$n2){
//     if (gettype($n1) == 'integer'  && gettype($n2) == 'integer'){
//         echo$n1 + $n2 ;
//     } else {
//         echo ' you mut be number 1 and number 2 is integer';
//     }
// }
//  sum('ds',4);

// $user = ['mohamed', 'adel', 'ahmed'];

//  for($i=0; $i <= $user; $i++){
//      echo $user[$i];
//      echo'<br>












