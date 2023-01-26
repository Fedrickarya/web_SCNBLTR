<?php 
require 'fungsi.php';

$id = $_GET['id'];
$_file = $_FILES['file'];

$uploadPath = 'files/' . basename($_file['name']);

$result = move_uploaded_file($_file['tmp_name'],$uploadPath);
if (!$result){
    echo'Gagal';
    exit();
}

$result = $conn->query('update game set gambar =" ' .$uploadPath .'" where id = ' . $id);
if (!$result){
    var_dump($conn->error);
    exit();
}
header('Location: admin.php')

?>