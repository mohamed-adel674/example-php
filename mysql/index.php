<?php

if(isset($_POST['username'])){

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

//begin connection
$co = mysqli_connect("localhost","root","","profile-test");

 //query
// $query = "INSERT INTO `user` (`username`,`email`,`password`) VALUES ('$username','$email','$password')"; 

// $deletQuery = "DELETE FROM 'user' WHERE 'id' = $id";

// $updateQuery = "UPDATE 'user' SET 'username' = '$username' WHERE 'id' = $id";

$selectQuery = "SELECT * FROM 'user'";
mysqli_query($co,$query);

// cheek inset, delete,update
// if($res == 1){
//     echo 'complate';
// }else{
//     echo 'error, try agein';
// }


}



