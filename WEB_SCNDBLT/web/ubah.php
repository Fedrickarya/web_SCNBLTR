
<?php
require 'fungsi.php';


//ambil data di url
$id = $_GET["id"];

//querry data berdasarkan id
$s = query("SELECT * FROM game WHERE id = $id")[0];


//cek apakah tombol submit sudah di tekan
if(isset($_POST["submit"]) ){

    //cek apakah data berhasil ditambahkan atau tidak
    if( ubah($_POST) > 0){
    echo "
             <script>
                alert('data berhasil diubah');
                document.location.href = 'admin.php'
            </script>
    ";
} else{
    echo "
            <script>
                alert('data gagal diubah');
            </script>
            ";
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
    <h1>Perbarui data anda</h1>

    <form action="" method="POST">
    <ul>
        <div class="isi">
        <li>
            <div class="mb-3">
            <label for="id" class="form-label">id</label>
            <input type="text" class="form-control" name="id" id="id"
            required value="<?= $s ["id"]; ?>">
            </div>
        </li>

        <li>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control"name="judul" id="judul"
            required value="<?= $s ["Judul"]; ?>">
            </div>
        </li>
        
        <li>
            <div class="mb-3">
            <label for="harga" class="form-label">harga</label>
            <input type="text" class="form-control"name="harga" id="harga"
            required value="<?= $s ["harga"]; ?>">
            </div>
        </li>
        <br>
        <li>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </li>
    </div>
    </ul>

    </form>
    
</body>
</html>
<style>
    body{
        margin-left:4%;
        margin-top:2%;
    }
    h1{
        margin-left:2%;
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
    li{
        list-style-type: none;
    }
    
</style>