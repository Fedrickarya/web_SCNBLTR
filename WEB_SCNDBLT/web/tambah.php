<style>
    li{
        list-style-type: none;
    }
</style>
<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location:login.php");
    exit;
}

require 'fungsi.php';
//cek apakah tombol submit sudah di tekan
if(isset($_POST["submit"]) ){

    //cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0){
    echo "
             <script>
                alert('data berhasil di tambahkan');
                document.location.href = 'admin.php'
            </script>
    ";
} else{
    echo mysqli_error($conn);
            
}

}

?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>Masukkan data anda</h1>

<form action="" method="POST">
<div class=isi>
    <div class="mb-3">
    <label for="judul" class="form-label">Judul</label>
    <input type="text" class="form-control" name="judul"id="judul" required>
    </div>
    <div class="mb-3">
    <label for="Harga" class="form-label">Harga</label>
    <input type="text" class="form-control" name="harga"id="harga" required>
    </div>
    <a href="tampilan.php"><button type="submit" name="submit" class="btn btn-primary">Submit</button></a>
</div>
</form>
  

    
</body>
</html>
<style>
    body{
        margin-left:5%;
        margin-top:2%;
    }
    label{
        font-weight:bold;
    }
    .mb-3{
        width:100%;
        padding:2%;

        
    }
    .isi{
        border:1px solid black;
        width:30%;
    }
    .btn{
        margin-bottom:2%;
        margin-left:2%;
    }
</style>