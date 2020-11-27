<?php
    
  include "../connect.php";
  
  if(isset($_POST['del_note'])){
    $id_note = $_POST['id_note'];

    $delete = "DELETE FROM catatan WHERE id = '$id_note'";
    $hasil_del = mysqli_query($conn, $delete);

    if ($hasil_del){
        header("Location: index.php");
    }
  }
?>
