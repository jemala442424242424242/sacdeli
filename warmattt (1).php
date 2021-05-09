<!DOCTYPE html>

<html>

	<head>
		<title>p1</title>
          <style>
          /*orive platformis dizaini*/
          #choose_sub{
                color:red;
            }
            .linkebi{
                text-decoration:none;
            }
          /*leptopis dizaini*/
           @media only screen and (min-width: 1068px){
               /*beqgraundi*/
            body{
               background-image:url("R17c8e3e9b6a8666311ba9fec73f3c8de.jfif");
               background-repeat:no-repeat;
               background-size: 1600px 800px;
            }
            
            #mainmenu{
                background-color:#E6F7FF;
                margin-top:100px;
                width:800px;
                height:300px;
            }
            #mainpageh1{
                height:80px;
                font-size:80px;
                color:rgba(239, 62, 237,1);
                transition:transform 3s;
                
            }
            #mainpageh1:hover{
                
                transform:rotate(40deg);
            }
            #choose_sub{
                text-shadow:30px 10px 5px grey;
            }
            #mainad{
            }
            #mainadtext{
                color:yellow;
            }
            #mainadtext, #mainad{
                font-size:30px;
                position:relative;
                bottom:-120px;
            }
            .sagnebi{
                position:relative;
                border:3px dashed black;
                width:200px;
                height:30px;
                background-color:red;
                text-decoration:none;
                color:black;
                font-size:20px;
            }
            #qimia{
                top:30px;
            }
            #fizika{
                top:60px;
            }
            
                }
            /*telefonis dizaini*/    
           @media only screen and (max-width: 998px){
               /*beqgraundi*/
           body{
               background-image:url("R17c8e3e9b6a8666311ba9fec73f3c8de.jfif");
               background-repeat:no-repeat;
               background-size: 1100px 1600px;
             }
            #mainmenu{
                background-color:#E6F7FF;
                margin-top:400px;
                width:850px;
                height:500px;

            }
            #mainpageh1{
                margin-top:150px;
                height:20px;
                font-size:80px;
                color:rgba(239, 62, 237,1);
                 transition:transform 3s;
            }
            #mainpageh1:hover{
                
                transform:rotate(40deg);
            }
            
            #mainadtext{
                color:yellow;
            }
            #mainadtext, #mainad{
                position:relative;
                bottom:-350px;
                font-size:40px;
            }
            .sagnebi{
                position:relative;
                top:10px;
                border:3px dashed black;
                width:500px;
                height:70px;
                color:black;
                background-color:red;
                font-size:46px;
                
            }
            #qimia{
                top:30px;
            }
            #fizika{
                top:60px;
            }
             #choose_sub{
                text-shadow:30px 10px 5px grey;
            }
             
            
                 }
            </style>

	</head>

	<body>
	     <center><h1 id = "mainpageh1">შპარგალკები</h1></center>
      <center><div id = "mainmenu">
          <h2 id = "choose_sub">აირჩიეთ საგანი რომლისთვისაც გინდათ გადაწერა:</h2>
          <a class = "linkebi" href = "matematika/matematikaklasi.html"><div class = "sagnebi" id =  "matematika">მათემატიკა</div></a>
          <a class = "linkebi" href = "qimia/qimiaklasi.html"><div class = "sagnebi" id = "qimia">ქიმია</div></a>
          <a class = "linkebi" href = "fizika/fizikaklasi.html"><div class = "sagnebi" id = "fizika">ფიზიკა</div></a>
      </div></center>
      <span id = "mainadtext">დაგავფოლოვეთ ტიკტოკზე:</span><a id = "mainad" target = "_blank" href = "https://www.tiktok.com/@baanceqs?lang=en">@baanceqs</a>

    </body>

</html>