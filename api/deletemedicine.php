<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id=intval($_REQUEST['id']);
    $imagePath=$_REQUEST['imagePath'];
echo $imagePath;
    $host="localhost";
    $conPassword="";
    $conUsername="root";
    $db="pocket_doctor";
    $connection=mysqli_connect($host,$conUsername,$conPassword,$db);
    $deleteQuery="delete from medicine_details where id=$id";
    $deleteRess = mysqli_query($connection, $deleteQuery);
  
        if (unlink($imagePath)) {
            if ($deleteRess) {
                echo"success";
                    header('Location: http://localhost/Pocket_doctor/admin/deletedata.php');
                }

        }
    
}

?>