<?php 
session_start();
if(!isset($_SESSION["keranjang"])){
    echo "<script>alert('Keranjang anda kosong,silahkan belanja dahulu')
    document.location.href = 'simulasi.php'</script>";
    return false;
    exit;
  }
require "fungsi.php";
?>
<html lang="en">
<title>second blitar</title>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="css/keranjang.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SCNDBLT</title>
</head>
<body>
    <h1 style="background-color: black;">DAFTAR BARANG</h1>
    <table class="table table-striped table-hover ">
        <tr style="color: white;">
            <th>NO.</th>
            <th>Judul</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        
        <?php $i = 1; ?>
        <?php
        foreach ($_SESSION['keranjang'] as $id => $jumlah): 
        ?>
        <?php 
        $ambil = $conn->query("SELECT * FROM game WHERE 
                id = '$id'");
        $pecah = $ambil->fetch_assoc();
        ?> 
        <tr style="color: white;">
        
            <td><?= $i; ?></td>
            <td><?= $pecah['Judul'];?></td>
            <td>Rp.<?=$pecah["harga"]?></td>
            <td><?= $jumlah ?></td>   
            <td><a href="hapuskeranjang.php?id=<?=$pecah['id']?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    <a href="ceckout.php" class="btn btn-primary">Check Out</a>
<a href="simulasi.php" class="btn btn-primary">Lanjutkan Belanja</a>
</body>
</body>
</html>