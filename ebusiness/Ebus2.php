<?php
// start the session
session_start();
?>

<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <PHP><head><link href="Ebus.css" rel="stylesheet" type="text/css">
         <style type = "text/css">
             #content {
                  top:8em;
                  left:25em;
                  width:30em;
                  height:30em;
                  position:absolute;
                  border-style:ridge;
             }
              ul{
            list-style-type:none;
            margin:0;
            padding:0;
            width:100%;
            overflow:hidden;
            background-color:#42d7f4 ;
}
li{
    float: left;
}
li a{
    display: block;
    color:black;
    text-align:center;
    padding: 16px 18px;
    text-decoration: none;
}
li a:hover {
    background-color:#d966ff ;
}
.active {
    background-color: #d966ff;
}
input[type=text] {
                           border: 2px solid blue;
                           border-radius: 4px;
                           text-align:center;
}
input[type=password] {
                           border: 2px solid blue;
                           border-radius: 4px;
                           text-align:center;
}
 button[type=submit]:disabled {
                           background-color: grey;
                           border-radius: 2px;
                           border:none;
                           color: black;
                           padding: 5px;
                           cursor: pointer;
                           
       }
        button[type=submit]:enabled {
                           background-color: #42d7f4;
                           border-radius: 2px;
                           border:none;
                           color: black;
                           padding: 5px;
                           cursor: pointer;
                           
       }
         </style>
         
         
         
         </head></PHP>
    </head>
    <body>
        <ul>
        <li><a href ="../homepage.html">Home</a></li>
        <li><a href= "cv/cv_page1.html">Curriculum Vitae</a></li>
        <li><a href ="Interests/sports.html">Interests</a></li>
        <li><a href ="Interests/travel.html">Travel</a></li>
        <li><a href ="Interests/cloud_services.html">Cloud Services</a></li>
        <li><a class = "active" href = "eBusiness/Ebus2.php">eBusiness</a></li>
        </ul>
        <h2>Please enter your payment details</h2>
        <div id ="content">
            <form action="Ebus3.php" method="POST">
                    <br>
                    <label for = "name">
                        <strong> &nbsp; Name:</strong>
                        <br>
                        &nbsp;<input type ="text" id ="name" name = "name"/>
                    </label>
                    <br><br>
                    <label for "email">
                        <strong>&nbsp; Email:</strong>
                        <br>
                        &nbsp;<input type = "text" id ="email" name="email"/>
                    </label>
                    <br><br>
                    &nbsp;&nbsp;<label for="user_pin"><strong>PIN:</strong></label>
                    <br>
                   &nbsp;<input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    <br><br><br>
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br>
            <button onClick="validateDetails()">Validate</button>
            
        </div>
        
        <script type="text/javascript" src="Ebus2_Validator.js"></script>
        
        <?php
        //Set session variables
        $_SESSION["total"] = $_POST["total"];
        $_SESSION["email"] = $_POST["email"];
        ?>
        
        </body>
</html>