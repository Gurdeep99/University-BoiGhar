<?php
    require_once('functions/function.php');
    $id=$_GET['del'];
    $dele="DELETE FROM adm_pen_reqbook WHERE id='$id'";
    mysqli_query($con,$dele);
    header('Location: all-pending-reqbook.php');
?>
