
<?php

  include "../connect.php";

  if(isset($_GET['id'])){
    $id_user = base64_decode($_GET['id']);

    $delete = "DELETE FROM login WHERE id = '$id_user'";
    $hasil_del = mysqli_query($conn, $delete);

    if ($hasil_del){
        header("Location: index.php?p=user");
    }
  }
?>
