<?php

if (isset($_REQUEST['searchBarInput'])) {
 
    $input = $_REQUEST['searchBarInput'];


    $words = explode(" ", $input); // Split the string into an array of words

// Get the last word from the array
$medicine_name = end($words);

// generic
// information 
//  dose size
//  image 
$host="localhost";
$conPassword="";
$conUsername="root";
$db="pocket_doctor";
$connection=mysqli_connect($host,$conUsername,$conPassword,$db);



$check = "select*from medicine_details where medicine_name like '%$medicine_name%'";
$res = mysqli_query($connection, $check);
$count=mysqli_num_rows($res);
if($count>0){

// case 1 match generic
if (stripos($input, "generic") !== false) {
       
   
            $query1 = "select*from medicine_details where medicine_name	 like '%$medicine_name%'";
            $res = mysqli_query($connection, $query1);
      
         $data=mysqli_fetch_assoc($res); 
              
              ?>
    <div class="item right">
                <div class="msg">
                    <p><?php echo $input; ?></p>
                </div>
            </div>
            <div class="item" style="margin-top:80px">
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="msg">
                <p>Generic Name, 
                <?php echo $data['generic_name']; ?>
              </p>
                </div>
            </div>



            
    <?php
    
            
        } 
        
        if (stripos($input, "information") !== false) {
          
            $query1 = "select*from medicine_details where medicine_name	 like '%$medicine_name%'";
            $res = mysqli_query($connection, $query1);
      
         $data=mysqli_fetch_assoc($res); 
     
              ?>
<div class="item right">
                <div class="msg">
                    <p><?php echo $input; ?></p>
                </div>
            </div>
            <div class="item" style="margin-top:80px">
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="msg">
                <p>Information , 
                <?php echo $data['information']; ?>
              </p>
                </div>
            </div>

    <?php
            
        } 
        
        if (stripos($input, "dose size") !== false) {
            $query1 = "select*from medicine_details where medicine_name	 like '%$medicine_name%'";
            $res = mysqli_query($connection, $query1);
      
         $data=mysqli_fetch_assoc($res); 
           
              ?>
<div class="item right">
                <div class="msg">
                    <p><?php echo $input; ?></p>
                </div>
            </div>
            <div class="item" style="margin-top:80px">
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="msg">
                <p>Dose Size, 
                <?php echo $data['dose_size']; ?>
              </p>
                </div>
            </div>



              
    <?php
            
        } 
    
        if (stripos($input, "image") !== false) {
            $query1 = "select*from medicine_details where medicine_name	 like '%$medicine_name%'";
            $res = mysqli_query($connection, $query1);
      
         $data=mysqli_fetch_assoc($res); 
           

              ?>
<div class="item right">
                <div class="msg">
                    <p><?php echo $input; ?></p>
                </div>
            </div>
            <div class="item" style="margin-top:80px">
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="msg">
                <p>Image, 
                <img src="<?php 
                 
                
                echo substr($data['image'], 1); ?>" alt="images" style="width:128px;height:120px"/>
              </p>
                </div>
            </div>





            
    <?php
        } 
}
else{
    ?>
    <div class="item right">
                    <div class="msg">
                        <p><?php echo $input; ?></p>
                    </div>
                </div>
                <div class="item" style="margin-top:80px">
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="msg">
                    <p>Image, 
                    Sorry No Result Found
                  </p>
                    </div>
                </div>
    
    
    
    
    
                
        <?php


}

    
    // else {
        // echo "Substring '$substring' not found in the string.";
    // }


    // food query
    


}








?>