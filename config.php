<?php 

    $connect = mysqli_connect("localhost", "root", "", "vote"); ;

    function regis($data) {
        global $connect;
        
        //mengambil data dari user yg menginputkan
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($connect, $data["password"]) ;
        $confirm_password = mysqli_real_escape_string($connect, $data["confirm_password"]) ;

        //cek password sama tidak dengan confirmnya
        if ($password !== $confirm_password) {
            echo "<script>
                    alert('Password tidak sesuai')
                    </script>";
                    return false;
        }

        //cek username sudah ada atau belum
        $result = mysqli_query($connect, "SELECT username FROM user WHERE username = '$username'");
        
        if (mysqli_fetch_assoc($result)) {
            echo "<script>
            alert('Username sudah terdaftar')
            </script>";
            return false;
        }

        //enskripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);


        //tambahkan user baru 
        mysqli_query($connect, "INSERT INTO user VALUES ('', '$username', '$password')");

        return mysqli_affected_rows($connect);

    }


?>