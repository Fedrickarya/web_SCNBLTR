<?php 

session_start();
unset($_SESSION['keranjang']);
echo "<script>alert('terimakasih atas pembeliannya')
document.location.href = 'simulasi.php'</script>"

?>