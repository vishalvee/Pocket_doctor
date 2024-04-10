<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['logout_click'])) {

        if (!isset($_SESSION)) {
            session_start();
        }

        unset($_SESSION['admin_login']);
        header('Location: /Pocket_doctor/admin/adminlogin.php');

    }
}