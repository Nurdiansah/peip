
<?php
    session_start();
    include "../connect.php";

    if(isset($_POST['ubah_pass'])){
        $password = md5($_POST['pass']);
        $id_user = $_SESSION['_id'];

        $update = "UPDATE login set password='$password' WHERE id='$id_user'";
        $hasil_ins = mysqli_query($conn, $update);

        if ($hasil_ins){
            header ('Location: index.php');
        }
    }
?>
