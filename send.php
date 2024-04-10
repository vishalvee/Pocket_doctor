<?php





if ($_SERVER["REQUEST_METHOD"] == "POST") {

 

$to="amangoyal62045@gmail.com";
$subject="";
$message="";
$from="prpbrainbooster@gmail.com";
    
    $headers="From: $from";
    
    
    if(mail($to,$subject,$message,$headers)){
    
        echo "SEND";
    }else{
        echo " NOT SEND";
    
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css?=v2">
    <script>
if(window.history.replaceState){

    window.history.replaceState(null,null,window.location.href);
}
        </script>
</head>
<body>


    <div class="container">
        <div class="bodyImg">

        <img src="./BGblue09.png" alt="bg" >
        </div>
        <div class="admin_product">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="test1" enctype="multipart/form-data"> 
            <h3>Add new medicine</h3>
                <input type="text" placeholder="enter email id for message" name="medi_name" class="box" autocomplete="off" >
              
                <div class="btnBox">

                  
                    <input type="submit"  name="add_medicine" value="send email" class="submit_btn">
                  
                </div>
              
 
    <!-- Voice Search by javascript -->

    </div>
    </div>

	
       

		<script>
		    function jsSpeechRecognition() {
		        // getting result
		        var result = document.getElementById("result");
		        // getting user action
		        var event = document.getElementById("event");
                // new speech recognition object
                var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
                var recognition = new SpeechRecognition();
            
                // This runs when the speech recognition service starts
                recognition.onstart = function() {
                    event.innerHTML = "Listening .....";
                };
                
                recognition.onspeechend = function() {
                    event.innerHTML = "stopped listening, hope you are done...";
                    recognition.stop();
                }
              
                // This runs when the speech recognition service returns result
                recognition.onresult = function(event) {
                    var transcript = event.results[0][0].transcript;
                    var confidence = event.results[0][0].confidence;
                    result.innerHTML = "<strong>Text:</strong> " + transcript + "<br/><strong>Confidence:</strong> "+ confidence*100+"%";
                    result.classList.remove("hide");
                };
              
                 // start speech recognition
                 recognition.start();
	        }
		</script>




</body>
</html>