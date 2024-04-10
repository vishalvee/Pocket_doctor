<?php
 session_start();
 $id=$_REQUEST['id'];
 $_SESSION['updateId']=$id;

 header('Location: http://localhost/Pocket_doctor/admin/adminupdateform.php');


?>