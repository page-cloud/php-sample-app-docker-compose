<?php
$host = 'db';
$user = 'page';
$password = 'page';
$db = 'page';
$conn = new mysqli($host,$user,$password,$db);
if($con->connect_error){
    echo '!!!! faild !!!!!' . $conn->connect_error;

}
echo ' Welcome to Page Cloud Academy  ';
?>
