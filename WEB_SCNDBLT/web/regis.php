<?php 

require 'fungsi.php';

if( isset($_POST["regis"]) ){

    if(regis($_POST) > 0 ) {
        echo "<script>
            alert('user telah ditambahkan');
            document.location.href = 'Login.php'
            </script>";
            
    }
    else{
        echo mysqli_error($conn);
    }

}


?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Halaman Registrasi</title>
        <link rel="stylesheet" href="css/regis.css">
        <div class="header">
            <h1>SCNDBLT</h1>  
          </div>
    </head>
   
    <body>
        <div class="container">
          <h1>Registration</h1>
            <form action="" method="POST">
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username"><br>
                <label for="pass">Password</label><br>
                <input type="password" name="pass" id="pass"><br>
                <button type="submit" name="regis">Registration</button>
            </form>
            <p> already have account?
            <a href="login.php">login here</a>
            </p>
    </body>
</html>