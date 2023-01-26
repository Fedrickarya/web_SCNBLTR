<?php 
session_start();

require "fungsi.php";

if (isset($_POST["login"]) ){

    $username =$_POST["username"];
    $password =$_POST["pass"];
    $result = mysqli_query($conn, 
    "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if ( mysqli_num_rows($result) == 1 ){

        //cek pasword
        $row =  mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"]) ){
            //set session
            $_SESSION['username'] = $row['username'];
            $_SESSION['Login'] = true;
            
            if ($username == "admin") {
                header('location:admin.php');       
            }else{
                header('location:index.php');
            }

    }
}

    $error = true;

}

?>
<html>
<title>second blitar</title>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Halaman Login</title>
        <link rel="stylesheet" href="css/login.css">
        <div class="header">
          <h1>SCNDBLT</h1>  
        </div>
        
    </head>
   
    <body>
        <div class="container">
        <h1>Login</h1>
         <?php  if(isset($error)) : ?>
            <p style=
            "color: rgb(88, 5, 5);
             font-style: italic; 
             text-align: center;
             background-color: rgb(240, 72, 72);
             margin-bottom:2% ;"
             >username / password salah
            </p>
        <?php endif; ?>
        <form action="" method="POST">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="pass">Password</label><br>
        <input type="password" name="pass" id="pass"><br> 
        <button type="submit" name="login" >Login</button>
        </form>
            <p> don't have account?
                <a href="regis.php">Registration here</a>
            </p>
    </body>
</html>

<style>
    button{
        color:black;
    }
</style>