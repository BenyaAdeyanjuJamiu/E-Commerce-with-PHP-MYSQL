
<?php 
 session_start();

 if(!isset($_SESSION["uid"])){
  header("Location: index.php");

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
         </ul>
       </div>
     </div>
     <p><br /></p>
     <p><br /></p>
     <p><br /></p>
     <div class="container-fluid">

      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8" id="cart_msg">
           <!--Cart Message-->
         </div>
         <div class="col-md-2"></div>

      </div>
       <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
          <div class="panel panel-primary">
          <div class="panel-heading">Cart Checkout</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-2"><b>Action</b></div>
              <div class="col-md-2"><b>Product Image</b></div>
              <div class="col-md-2"><b>Product Name</b></div>
              <div class="col-md-2"><b>Quantity(s)</b></div>
              <div class="col-md-2"><b>Product Price</b></div>
              <div class="col-md-2"><b>Total in $</b></div>
            </div>

            <div id="cart_checkout"></div>
          
           <!--<div class="row">
              <div class="col-md-2">
                
               <div class="btn-group">
                 <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                 <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
               </div>

              </div>
              <div class="col-md-2"><img src='project_images/Image.png'></div>
              <div class="col-md-2">Product Name</div>
              <div class="col-md-2"><input type='text'  class='form-control' value='1'></div>
              <div class="col-md-2"><input type='text'  class='form-control' value='5000' disabled></div>


              <div class="col-md-2"><input type='text'  class='form-control' value='5000' disabled></div>
            </div>-->

            <!-- <div class="row">
               <div class="col-md-8"></div>
               <div class="col-md-4">
                 <b>Total $50000</b>
               </div>
             </div>-->
          </div>

               <div class="panel-footer"></div>
           </div>
         </div>
         <div class="col-md-2"></div>
       </div>
     </div>
       </body>
      </html>