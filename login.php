<html>
    <head>

    </head>
        <script src="src/js/login.js"></script>

        <link rel="stylesheet" href="src/css/login.css">
    <body>

    <div class="div_login" id="log">
        <!-- <form method="post" action="page.php"> -->
           <p class="title"> LOGIN</p>
        <form method="post" >
            <p>Login</p>
            <input class="login"  type="text" name="login">
            <p>Password</p>
            <input class="pass" type="password" name="password">
            <input class="btn" type="submit" value="SignIN" name="signin">
         </form>
    </div>
    
    <div class="div_reg" id="reg">
        <p class="title">REGISTRATION </p>
        <!-- <form method="post" action="page.php"> -->
        <form method="post" >
         
            <p>Login</p>
            <input class="login"  type="text" name="login">
            
            <p>Password</p>
            <input class="pass" type="password" name="password">
         
            <p>Confirm password</p>
            <input class="pass" type="password" name="c_password">
         
            <!-- <p>Mail</p>
            <input class="pass" type="mail" name="mail">
             -->
            <input class="btn" type="submit" value="SignUP">
         </form>
    </div>

    <div class="div_btn" onclick="swap()">
        <div class="div_swap_in"> signIn </div>
        <div class="div_swap_up"> signUp </div>
        <div class="div_swap_select" id="swap_selector"> </div>
    </div>

    <div class="btn_continue" onclick="continue_()">
        continue without authorization
    </div>

    </body>
</html>

<?php 

// if($_COOKIE['id'] != -1 && $_COOKIE['id']){
//     header('Location: index.php');
// }
  




$servername = "localhost";
$username   = "robotorg";
$password   = "pass11";
$database   = "robo";


$link = mysqli_connect($servername, $username, $password, $database);


if (!$link) {
    die('Ошибка соединения: ' . mysql_error());
}



if(!isset($_POST["signIN"]) ) {
    $login = $_POST['login'];
    $pass =  $_POST['password'];

    $query = "select id from users where login='$login' and pass='$pass';";

    $result = $link->query($query);

    if ($result->num_rows != 0){
        setcookie("id", mysqli_fetch_assoc($result)['id']);
        setcookie("login", $login);
        header('Location: index.php');
    } 
}


/*
insert into users(login, pass) values ('', '');
select id from users where login='' and pass='';
*/

?>