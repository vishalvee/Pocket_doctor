<?php
@include 'config.php';

$id = $_GET['edit'];


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (isset($_POST['Update Medicine'])) {
        $medicien_name = strip_tags($_POST['medi_name']);
        $medicien_genric = $_POST['gen_name'];
        $medicien_information = $_POST['info'];
        $medicien_dose = $_POST['dose_size'];
        $medicien_image = $_FILES['medi_image']['name'];
        $medicien_image_tmp_name = $_FILES['medi_image']['tmp_name'];

        //add image folder of mediciens 
        $medicien_image_folder = '' . $medicien_image;

        if (empty($medicien_name) || empty($medicien_genric) || empty($medicien_information) || empty($medicien_dose) || empty($medicien_image)) {
            $message[] = 'please fill all details';
        } else {
            $update = "UPDATE pocket_doctor SET mediname='$medicien_name', generic='$medicien_genric',info='$medicien_information',dosesize=' $medicien_dose',image='$medicien_image'
            WHERE id=$id";
            $upload = mysqli_query($conn, $update);
            if ($upload) {
                move_uploaded_file($medicien_image_tmp_name, $medicien_image_folder);
               
            } else {
                $message[] = 'Could not add the medicine';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin update</title>
    <!--Main Css file link-->
    <link rel="stylesheet" href="style.css?=v3">
    <!--font font-awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body> 
<?php
    
        if (isset($message)) {
            foreach ($message as $message) {
                echo '<span class="message">' . $message . '</span>';
            }
        }
?>


<div class="container">
    <div class="bodyImg">
    <img src="./BGblue09.png" alt="bg">
    </div>
        <div class="admin_product">

<?php

$select= mysqli_query($conn,"SELECT *FROM pocket_doctor WHERE id = $id ");
while($row = mysqli_fetch_assoc($select)){



?>


             <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <h3>Update The Medicine</h3>
                    <input type="text" placeholder="enter medicine name" value="<?php $row['mediname'];?>" id="medicine_name" name="medi_name" class="box" >
                    <input type="text" placeholder="enter generic name"  value="<?php $row['generic'];?>"  name="gen_name" class="box">
                    <textarea placeholder="enter information of medicine" name="info" class="box" cols="32" rows="5" style="width: 718px; height: 135px;" id="raja"></textarea>
                    <input type="text" placeholder="enter dose size" name="dose_size" class="box">
                    <div class="btnBox">

                    <input type="file" accept="image/png, image/jpeg, image/jpg" placeholder="add image of medicine" name="medi_image" class="box1">
                    <input type="submit" name="Update Medicine" value="Update Medicine" class="submit_btn">
                    <a href="admin_page.php" class="submit_btn" >GO Back</a>
                </div>
               
            </form>
        <?php };?>
        </div>
</div>
</body>
</html> 