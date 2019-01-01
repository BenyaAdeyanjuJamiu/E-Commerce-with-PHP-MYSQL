<?php

session_start();

if(!isset($_SESSION["uid"])){

header("location:index.php");

}

$trx_id = $_GET["tx"];
$p_st = $_GET["st"];
$amt = $_GET["amt"];
$cc  = $_GET["cc"];
$cm = $_GET["cm"];

if($_COOKIE["ta"] == $amt && $p_st == "Completed" && $cm == $_SESSION["uid"]){
  echo "Everything is ok";
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
              <h1>Thank You</h1>
              <hr/>

               <p>Hello&nbsp;<b><?php echo $_SESSION["name"];?></b>, Your payment process is
                successufully completed you and your Transacation ID is <b><?php echo $trx_id;?></b><br/>
               you can continue your shopping<br /></p>

               <a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
            <div class="panel-footer"></div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
     </body>
     </html>