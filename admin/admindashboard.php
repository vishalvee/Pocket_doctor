<?php require('../api/adminlogout.php'); ?>


<?php
   if (!isset($_SESSION)) {
    session_start();
}

if(isset($_SESSION['admin_login'])){

    if(!$_SESSION['admin_login']=="true"){
        header('Location: /Pocket_doctor/admin/adminlogin.php');
    
    }
}
else{

    header('Location: /Pocket_doctor/admin/adminlogin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('../components/HeadTag.php');?></php>
    <link rel="stylesheet" href="admindashboard.css">
</head>
<body>
  <div class="layout">

    <a class="header" href="#0">
      <i class="fa fa-bars"></i>
      
      <div class="header-user"><i class="fas fa-user-circle icon"></i>Hello Vishal</div>
    </a>

    <div class="sidebar">
      <ul>
        <li> <a class="sidebar-list-item active" href="http://localhost/Pocket_doctor/admin/admindashboard.php"> <i class="fas fa-home icon"></i><em>Dashboard</em></a></li>
        <li> <a class="sidebar-list-item" href="http://localhost/Pocket_doctor/admin/showmedicine.php"> <i class="fas fa-user icon"></i><em>Show Medicine</em></a></li>
        <li> <a class="sidebar-list-item" href="http://localhost/Pocket_doctor/admin/updateadmin.php"> <i class="fas fa-tasks icon"></i><em>Update Medicine </em></a></li>
        <li> <a class="sidebar-list-item" href="http://localhost/Pocket_doctor/admin/deletedata.php"> <i class="fas fa-tasks icon"></i><em>Delete Medicine </em></a></li>
        <li> 
        
            <a class="sidebar-list-item " href="#0"> <form method="post" action="" autocomplete="off"">
        <button name="logout_click" style="border:none;outline:none;background:none;font-size:16px;cursor:pointer"><i class="fas fa-calendar icon"></i><em>Logout</em>
        </button>
                    </form>
        </a>
        
        </li>
       
      </ul>
    </div>

    <main class="content">
      <div class="main-header">
        <div class="main-title">
          <h1>Add Medicine</h1>
        </div>
        <div class="main-form">
          <form name="event" action="/Pocket_doctor/api/insertmedicine.php" method="POST" enctype="multipart/form-data">
            <input type="text" id="ftitle" name="medicinename" placeholder="Add Medicine Name">
            <input type="text" id="fdescription" name="genericname" placeholder="Add Generic Name">
            <textarea name="information" id="" placeholder="Add Information" ></textarea>
           
            <input type="text" name="dosesize" id="flocation" placeholder="Add Dose size">
            <input type="file" name="image" id="flocation" placeholder="Add Image">

         

            <input type="submit" id="fsubmit" name="insertrecords"value="Save" class="button">
          </form>
        </div>
      </div>
    </main>

    <footer class="footer">
      <div class="footer_sign">made with <span class="fas fa-heart"></span> by <a href="https://mafda.github.io/" target="blank">Pocket Doctor</a></div>
    </footer>

  </div>

  <script src="./admindashboard.js"></script>
</body>
</html>