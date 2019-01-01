<?php

session_start();

if(!isset($_SESSION["uid"])){

  header("location:index.php");

}




?>

<!DOCTYPE html>
<html>
<head>
	<title>Home: DSTI SHOPPING MALL ONLINE</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
  <style>
    table tr td {padding: 10px;}
  </style>
</head>
<body>
	<!--Shopping cart Template-->
   <div class="navbar navbar-inverse navbar-fixed-top">
   	
    <!--Build the Container for the shopping cart-->
    <div class="container-fluid">
    	<div class="navbar-header">
    		<a href="index.php" class="navbar-brand">DSTI Store</a>
    	</div>
      
       <!--Add some list-->
       <ul class="nav navbar-nav">
       	  <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
       	   <li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
       	   <li style="width: 300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
       	   <li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
       	
       </ul>
     </div>
     </div>

     <p><br/></p>
     <p><br/></p>
     <p><br/></p>
    <p><br/></p>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="pane panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body">
              <h1>Customer Order Details</h1>
              <hr/>
             <div class="row">
               <div class="col-md-6">
                 <img  style="float:right;" src="project_images/eg1.png" height="300px" width="300" class="img-thumbnail">
               </div>
               <div class="col-md-6">
                 <table>
                   <tr><td>Product Name</td><td><b>&nbsp;Sony Camera</b></td></tr>
                   <tr><td>Product Price</td><td><b>$500</b></td></tr>
                   <tr><td>Quantity(s)</td><td><b>3</b></td></tr>
                   <tr><td>Payment</td><td><b>Completed</b></td></tr>
                   <tr><td>Transaction Id</td><td><b>AAAAAABBBBB556</b></td></tr>

                 </table>
               </div>
             </div>
            </div>
            <div class="panel-footer"></div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
     </body>
     </html>