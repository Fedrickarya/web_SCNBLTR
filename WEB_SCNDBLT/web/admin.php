<?php
session_start();
require "fungsi.php";
if(!isset($_SESSION["username"])){
    header("Location:login.php");
    exit;
  }
$game = query("SELECT * FROM game");
?>
<!DOCTYPE html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<title>Halaman Tampilan</title>
</head>
<body>
    <h1>DAFTAR BARANG</h1>
    <a href="logout.php"><h1>logout</h1></a>
    <table class="table table-striped table-hover">
        <tr>
            <th>NO.</th>
            <th>Aksi</th>
            <th>Id</th>
            <th>Judul</th>
            <th>Gambar</th>
            <th>Harga</th>
        </tr>
        
        <?php $i = 1; ?>
        <?php foreach( $game as $g): ?>
        <tr>
        
            <td><?= $i; ?></td>
            <td>
                <a href="./ubah.php?id=<?= $g["id"];?>"onclick="return confirm('apakah anda ingin mengubahnya?')">ubah</a> /
                <a href="./hapus.php?id=<?= $g["id"]; ?>"onclick="return confirm('apakah anda yakin?')">hapus</a>
            </td>
            <td><?=$g["id"]?></td>
            <td><?= $g["Judul"] ?></td>
            <td> 
                <img src="<?= $g["gambar"]?>">
                <?php if (!$g['gambar']) { ?>
                    <a href="uploadJurnal.php?id=<?=$g['id']?>">Upload</a>
                <?php } else { ?>
                    <a href="<?= $g['gambar']?>"target="_blank">Donwload</a>
                <?php } ?>        
                <td>Rp.<?= $g["harga"] ?></td>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
        <a href="./tambah.php"><button type="submit" name="submit">Tambahkan Data</button></a>
</body>
</html>
<style>
    img{
        height:20%;
        width:20%;
    }
    h1{
        float:left;
        margin:2%;
        padding:5%;
    }
</style>