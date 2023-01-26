<?php

//mengconnect kan
$conn = mysqli_connect("localhost","root","","login");

    //looping 
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ){
            $rows[] = $row;
        }
        return $rows;
    }
    
    function regis($data) {
        global $conn;

        $user = strtolower(stripslashes($data["username"]));
        $pass = mysqli_real_escape_string($conn, $data["pass"]);

        //cek username udah ada
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username ='$user'");
        
        if( mysqli_fetch_assoc($result) ){
            echo "<script>
                    alert ('username sudah terdaftar!')
                </script>";
            return false;
        }

        //cek konfirmasi pasword

        //enkripsi passowrd
        $password = password_hash($pass, PASSWORD_DEFAULT);
        
        //memasukan ke database
        mysqli_query($conn, "INSERT INTO user VALUES('', '$user','$password')");

        return mysqli_affected_rows($conn);


    }
    function tambah($data){
        global $conn;

        //ambil data dari setiap form
        $Nama =htmlspecialchars($data["judul"]);
        $harga =htmlspecialchars($data["harga"]);
        $gambar=$data["gambar"];


        //queery insert data
        $query = "INSERT INTO game VALUES ('','$Nama','$gambar',$harga)";
        mysqli_query($conn, $query);

        
        return mysqli_affected_rows($conn);
    
    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM game WHERE id = $id ");
        
        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;
        $id = $data["id"];
        //ambil data dari setiap form
        $judul =htmlspecialchars($data["judul"]);
        $harga =htmlspecialchars($data["harga"]);

        //queery insert data
        $query = "UPDATE game SET
                    judul = '$judul',
                    harga = '$harga'
                    WHERE id = $id 
                    ";
        mysqli_query($conn, $query);

        
        return mysqli_affected_rows($conn);


    }

?>
?>