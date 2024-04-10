<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['adminlogin'])) {
    
        $adminSecret = $_REQUEST['email'];
        $adminPassword = $_REQUEST['password'];
 

    $env = parse_ini_file('../.env');
    // check correct user name
    if ($env["ADMIN_SECRET_EMAIL"] == $adminSecret) {
        // checking password
        if ($env["ADMIN_PASSWORD"] == $adminPassword) {
      session_start();
    $_SESSION['admin_login']="true";
    header('Location: /Pocket_doctor/admin/admindashboard.php');

        }

        // password is wrong
        else {
echo "<script>alert(\"Admin Password Is Wrong\");</script>";
return;
        }
    }
    // secret is wrong
    else {

        echo "<script>alert(\"Admin Email Id  Is Not Valid\");</script>";
        return;
    }


    }

}


?>

