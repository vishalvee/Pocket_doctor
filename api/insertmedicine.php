<?php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['insertrecords'])) {


$medicinename=$_REQUEST['medicinename'];
$genericname=$_REQUEST['genericname'];
$information=$_REQUEST['information'];
$dosesize=$_REQUEST['dosesize'];


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

$sql_query = "insert into medicine_details(medicine_name,generic_name,information,dose_size,image) values('$medicinename','$genericname','$information','$dosesize','$newLocationName')";
$res = mysqli_query($connection, $sql_query);



if (move_uploaded_file($tmp_name, $newLocationName)) {

    echo "<script>alert('medicine Successfully added');</script>";
    header('Location: http://localhost/Pocket_doctor/admin/showmedicine.php');

}
    }

}
?>