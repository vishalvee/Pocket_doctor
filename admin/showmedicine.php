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
    <link rel="stylesheet" href="showmedicine.css">
</head>
<body>
  <div class="layout">

    <a class="header" href="#0">
      <i class="fa fa-bars"></i>
      
      <div class="header-user"><i class="fas fa-user-circle icon"></i>Hello Vishal</div>
    </a>

    <div class="sidebar">
      <ul>
        <li> <a class="sidebar-list-item " href="http://localhost/Pocket_doctor/admin/admindashboard.php"> <i class="fas fa-home icon"></i><em>Dashboard</em></a></li>
        <li> <a class="sidebar-list-item active" href="/localhost/Pocket_doctor/admin/showmedicine.php"> <i class="fas fa-user icon"></i><em>Show Medicine</em></a></li>
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
    <div class="container">
<h1>Medicine List</h1>
  <table class="rwd-table">
    <tbody>
      <tr>
        <th>Medicine Name</th>
        <th>Generic Name</th>
        <th>Information</th>
        
        <th>Dose Size</th>
        <th>image</th>
      </tr>
     
        <?php 
        $host="localhost";
        $conPassword="";
        $conUsername="root";
        $db="pocket_doctor";
        $connection=mysqli_connect($host,$conUsername,$conPassword,$db);
$q1="select*from medicine_details";
$res = mysqli_query($connection, $q1);
while ($data = mysqli_fetch_array($res)) {
?>
 <tr>
 <td data-th="Supplier Code">
        <?php echo $data['medicine_name'];?>
        </td>
        <td data-th="Supplier Name">
        <?php echo $data['generic_name'];?>
        </td>
        <td data-th="Invoice Number">
        <?php echo $data['information'];?>
        </td>
        <td data-th="Invoice Date">
        <?php echo $data['dose_size'];?>
        </td>
        <td data-th="Due Date">
            <img src="<?php echo $data['image'];?>" alt="" class="images">
        
        </td>
        
      </tr>
     


   <?php }   ?>
        
     
    </tbody>
  </table>
  
</div>
    </main>

    <footer class="footer">
      <div class="footer_sign">made with <span class="fas fa-heart"></span> by <a href="https://mafda.github.io/" target="blank">Pocket Doctor</a></div>
    </footer>

  </div>

  <script src="./admindashboard.js"></script>
</body>
</html>