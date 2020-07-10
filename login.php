<?php


$servername = "localhost";
$username   = "robotorg";
$password   = "pass11";
$database   = "robo";


$link = mysqli_connect($servername, $username, $password, $database);


$login = "user";
$pass  = "pass";

$query = "select id from users where login='$login' and pass='$pass';";

$result = $link->query($query);

if ($result->num_rows != 0){
    $id = mysqli_fetch_assoc($result)['id'];
    echo "user id:$id";
} 
else{ 
    echo "fail";
}

?>