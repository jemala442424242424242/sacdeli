<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    header('Location : http://' . $_SERVER['REQUEST_METHOD'] . '/warmattt.php');
}
?>


<!DOCTYPE html>

<html>

	<head>
		<title>შპარგალკები | ბაანცექს</title>

          <style>
          body{
              background-color:green;
          }
           @media only screen and (min-width: 1068px){
                           #mainadtext{
                color:yellow;
            }
            #mainadtext, #mainad{
                font-size:30px;
                position:relative;
                bottom:-120px;
            }
            #forma{
                /*margin-right:-1200px;*/
                margin-top:-286px;
                
            }
            #agwera{
                white-space:pre-line;
                margin-top:185px;
                color:skyblue;
            }
            body{
                background-image:url("surati.jpg");
                background-size: 1600px 800px;
            }
            #submit{
                background-color:skyblue;
                margin-top:20px;
                border:none;
                width:120px;
                height:60px;
                cursor:pointer;
            }
            #pass{
                width:360px;
                height:70px;
                font-size:30px;
            }
           }
          @media only screen and (max-width: 998px){
            #mainadtext{
                color:yellow;
            }
            #mainadtext, #mainad{
                position:relative;
                top:700px;
                font-size:40px;
            }
            #forma{
                /*margin-right:-1200px;*/
                margin-top:-456px;
                
            }
            #agwera{
                white-space:pre-line;
                margin-top:295px;
                font-size:50px;
                color:green;
            }
            body{
                background-image:url("surati.jpg");
                background-repeat:no-repeat;
                background-size: 1100px 1600px;
            }
            #submit{
                background-color:skyblue;
                margin-top:20px;
                border:none;
                width:120px;
                height:60px;
                cursor:pointer;
            }
            #pass{
                width:360px;
                height:70px;
                font-size:30px;
            }


          }
          </style>

	</head>

	<body>
	    <center><h1 >საიტი გაკეთდა!</h1> <br>
	    <h3 id = "agwera">მათემატიკა-✔️
	    ფიზიკა-✔️
	    ქიმია-✔️
	    </h3>
	    
	    <form method="POST" id = "forma"  >
	        <input id = "pass" type = "text" placeholder = "პაროლი" name="paroli"><br>
	        <div id = "html_element" ></div><br>
	        <input  type = "submit" id = "submit" value = "დადასტურება">
	    </form></center>
	    <span id = "mainadtext">დაგავფოლოვეთ ტიკტოკზე:</span><a id = "mainad" target = "_blank" href = "https://www.tiktok.com/@baanceqs?lang=en">@baanceqs</a>
	    <script>//✔️❌✔️
	       /* var pass = document.getElementById("pass");
	        var forma = document.getElementById("forma");
	        var knopk = document.getElementById("submit");
	        knopk.onclick = function(){
	            if(pass.value == "sandro13"){
	                forma.action = "warmattt.php";
	                forma.submit();
	            }
	            else{
	                alert("არასწორია პაროლი");
	            }
	        }
	        */
	    </script>

	</body>

</html>