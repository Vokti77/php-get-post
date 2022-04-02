<?php 
    if(isset($_GET['username']) &&  isset($_GET['password'])){
        $username = $_GET['username'];
        $password = $_GET['password'];

        if(!empty($username) && !empty($password)){
            if($username == 'vokti' && $password == '123'){
                echo("Login Successfull!");
            } 
            else{
                echo("Login error!");
            }
        }
        else{
            echo("Submit Valid Info!");
        }
    }
?>

<form action="get.php" method="get">
    Username : <input type="text" name ="username"><br><br>
    Password : <input type="password" name ="password"><br><br>
    <input type="submit" name = "Login">
</form> 