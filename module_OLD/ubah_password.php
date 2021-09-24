
<?php
    session_start();
    include "../connect.php";

    if(isset($_POST['ubah_pass'])){
        $password = md5($_POST['pass']);
        $id_user = $_SESSION['id_pengguna'];

        $update_pass = mysqli_query($conn, "UPDATE login set password='$password' WHERE id = '$id_user'");

        if ($update_pass){
            header ('Location: index.php');
        }
    }
?>
