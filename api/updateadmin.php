<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['updaterecords'])) {
        session_start();
        $id=$_SESSION['updateId'];

$medicinename=$_REQUEST['medicinename'];
$genericname=$_REQUEST['genericname'];
$information=$_REQUEST['information'];
$dosesize=$_REQUEST['dosesize'];
$oldImage=$_REQUEST['oldImage'];


// medicine image added
$OriginalFileName = $_FILES['image']['name'];
$tmp_name =  $_FILES['image']['tmp_name'];
$location = "../medicine_images/";
$newLocationName = $location . time() . "-" . rand(1000, 9999) . "-" . $OriginalFileName;


$host="localhost";
$conPassword="";
$conUsername="root";
$db="pocket_doctor";
$connection=mysqli_connect($host,$conUsername,$conPassword,$db);

$sql_query = "update medicine_details set medicine_name='$medicinename',generic_name='$genericname',information='$information',dose_size='$dosesize',image='$newLocationName' where id=$id";
$res = mysqli_query($connection, $sql_query);

if (unlink($oldImage)) {

    if (move_uploaded_file($tmp_name, $newLocationName)) {

        echo "<script>alert('medicine Successfully Updated');</script>";
        header('Location: http://localhost/Pocket_doctor/admin/updateadmin.php');
    
    }
}


    }

}
?>