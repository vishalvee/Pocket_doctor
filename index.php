<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
    <title>Pocket Doctor</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
    <div class="wrapper">
        <div class="title">Pocket Doctor Chatbot</div>
        <div class="box" id="chatBoxBox">


        
        

            
        </div>
        
        <div class="typing-area">
            <div class="input-field">
                <input type="text"id="searchBarMain" placeholder="Enter Medicine Name" >
                <button onclick="searchMainBar()">Send</button>
            </div>
        </div>
    </div>

    <script>

        function searchMainBar(){

            let searchInput = document.getElementById('searchBarMain').value;

            $.ajax({
                    type: "POST", //type of method
                    url: "http://localhost/Pocket_doctor/searchlogic.php", //your page
                    data: {
                        searchBarInput: searchInput
                    }, // passing the values
                    success: function(res) {
                     console.log(res)
                     document.getElementById('chatBoxBox').innerHTML=res;
                    }
                });

            }
        

            
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</body>
</html>