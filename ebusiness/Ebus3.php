<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
	<html>
	    <head>
	        <title>RECEIPT</title>
	        <!--Adding style-->
	             <style type = "text/css">
h1 {
    color: Blue;
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
    background-color: #dddddd;
    font-size: 150%;
}
li {
    display: inline;
}
ul li a:hover{
  color:black;
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
	       <h1 style="background-color:DodgerBlue;"  class="mainheading" > Your purchase reciept </h1>
        
        
     <!--Adding the nav bar-->
 <ul>
  <li><a href="homepage.html">Home</a></li>
  <li><a href="Sports.html">Interests</a></li>
  <li><a href="cv_page1.html">Curriculum Vitae</a></li>
   <li><a href="myproduct.html">EBusiness</a></li>
  <li> <a href="https://github.com/MarkScanlan"> My Github </a></li>

  
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
<p><img src = "https://az616578.vo.msecnd.net/files/2017/02/21/636232341000937145-2058526602_technology.jpg"  style="width:70px;height:70px;"></p>
<br/>
<br/>
<p> Thank you for choosing Looptown Ltd.
<br/>
<br/>
<a href = "homepage.html" class = "btn btn-dark">  Back To Home.</a>

</p>
        </div>
        
     
	    </body>
	</html>