<?php 
    if(isset($_POST['username']) &&  isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

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

<form action="post.php" method="post">
    Username : <input type="text" name ="username"><br><br>
    Password : <input type="password" name ="password"><br><br>
    <input type="submit" name = "Login">
</form> 