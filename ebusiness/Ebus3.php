<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
	<html>
	    <head>
	        <title> Receipt </title>
	        <!--Adding style-->
	             <style type = "text/css">
h1 {
    color: red;
    font-family: courier;
    font-size: 250%;
    top:10em;
	left:25em;
	text-align:center;

}
p {
   text-align:center;

}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: black;
    font-size: 150%;
}
li {
    display: inline;
}
ul li a:hover{
  color:red;
  background:blue;
}

ul li{
  list-style: none;
  display: inline;
position: relative;  
margin-left:130px;
transform:translate(20%,30%);
font-size:22px;
}

	    #mainContent {
	        top:8em;
	        left:25em;
	        width:30em;
	        height:25em;
	       position:absolute;
	       border-style:groove;
	                 }
	             </style>
	         </head>
	    </head>
	    <body>
	        <!--Adding a heading-->
	       <h1 style="background-color: Black;"  class="mainheading" > Your purchase reciept </h1>
        
        
     <!--Adding the nav bar-->
 <ul>
  <li><a  style="color:red;" href="../homepage.html"> Home</a></li>
  <li><a  style="color:red;" href="../sports.html"> Interests</a></li>
  <li><a  style="color:red;" href="../cv_page1.html"> Curriculum Vitae</a></li>
  <li><a  style="color:red;" href ="../Interests/cloudservicing.html">Cloud Servicing</a></li>
  <li> <a style="color:red;" href="https://github.com/MarkScanlan"> My Github </a></li>

  
</ul>
	        <br/>
	       
	     
	      <div id = "mainContent">
        <?php
        //Echo session varaibles that were set to the previous page
        echo("<strong>Name: </strong>". $name);
        echo("<br><br><strong>Email: </strong>". $email);
        echo "<br><br><strong>Total Price is $</strong>" .$_SESSION["total"] . "."; 

        ?>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        

<br/>
<p><img src = "https://scontent-dub4-1.xx.fbcdn.net/v/t1.0-9/20842236_1940362326176199_551552686338685606_n.png?oh=2f71dd65968d1dea15acb50538338693&oe=5B025B3F"  style="width:70px;height:70px;"></p>
<br/>
<br/>
<p> Thank you for choosing Looptown Ltd.
<br/>
<br/>


</p>

    <footer>
    <br>
  <p>Find me on Social Media:</p> &copy;
 <!-- Adding icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Adding Icons -->
<a href="https://www.facebook.com/LooptownMusic/" class="fa fa-facebook"></a>
<a href="https://www.instagram.com/looptownmusic/" class="fa fa-instagram"></a>

  
  
            </p>
</footer>
        </div>
        
     
	   </body>
</html>