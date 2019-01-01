<?php

session_start();

if(isset($_SESSION["uid"])){

  header("location:profile.php");

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
       	   <li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
       	
       </ul>

       <ul class="nav navbar-nav navbar-right">

       	 <!-- Work on Cart-->
       	  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
            <div class="dropdown-menu" style="width: 400px;">
            	<div class="panel panel-success">
            		<div class="panel-heading">
            			<div class="row">
            				<div class="col-md-3">S1.No</div>
            				<div class="col-md-3">Product Image</div>
            				<div class="col-md-3">Product Name</div>
            				<div class="col-md-3">Price in $.</div>
            			</div>
            		</div>
            		<div class="panel-body"></div>
            		<div class="panel-footer"></div>
            	</div>
            </div>




       	  </li>
       	  <!--Make sighin-->
       	  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
            <ul class="dropdown-menu">
            	<div style="width: 300px;">
            		<div class="panel panel-primary">
            		<div class="panel-heading">Login</div>
            		<div class="panel-heading">
            			<label for="email">Email</label>
            			<input type="email" class="form-control" id="email" required/>
            			  <label for="password">Password</label>
            			  <input type="password"  class="form-control" id="password" required/>
            			  <p><br /></p>
            			  <a href="#" style="color: white; list-style: none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float: right;" id="login" value="Login">
            		</div>
            		<div class="panel-footer" id="e_msg"></div>
            	</div>
            </div>
            </ul>
       	  </li>
       	  <li><a href="#"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
       	  
       </ul>

    </div>

   </div>

   <!--Creating side bar for the Categories and Brand-->
   <p><br /></p>
   <p><br /></p>
   <p><br /></p>
   <p><br /></p>

    
   <div class="container-fluid">
   	   <div class="row">
   	   	 <div class="col-md-1"></div>
   	   	 <div class="col-md-2">
   	   	 	  <!--This is for the Categories-->
              <div id="get_category">
              	
              </div>

   	   	 	 <!-- <div class="nav nav-pills nav-stacked">
   	   	 	  	<li class="active"><a href="#"><h4>Categories</h4></a></li>
   	   	 	  	<li><a href="#">Categories</a></li>
   	   	 	  	<li><a href="#">Categories</a></li>
   	   	 	  	<li><a href="#">Categories</a></li>
   	   	 	  	<li><a href="#">Categories</a></li>
   	   	 	  </div>-->
             <!--This is for the Brand-->

             <div id="get_brand">
              	
              </div>
   	   	 	  <!--<div class="nav nav-pills nav-stacked">
   	   	 	  	<li class="active"><a href="#"><h4>Brand</h4></a></li>
   	   	 	  	<li><a href="#">Categories</a></li>
   	   	 	  	<li><a href="#">Categories</a></li>
   	   	 	  	<li><a href="#">Categories</a></li>
   	   	 	  	<li><a href="#">Categories</a></li>
   	   	 	  </div>-->
   	   	 </div>
   	   	 <div class="col-md-8">
   	   	 	
   	   	 	  <div class="panel panel-info">
   	   	 	  	 <div class="panel-heading">Products</div>
   	   	 	  	 <div class="panel-body">
   	   	 	  	 	<div id="get_product">
   	   	 	  	 		<!-- Here we get products with Jquery Ajax Request-->
   	   	 	  	 	</div>
   	   	 	  	 	<!--<div class="col-md-4">
   	   	 	  	 		<div class="panel panel-info">
   	   	 	  	 			<div class="panel-heading">Samsung Galaxy</div>
   	   	 	  	 			<div class="panel-body">
   	   	 	  	 				<img src="project_images/shoe1.png" height="200px" width="170px;">
   	   	 	  	 			</div>
   	   	 	  	 			<div class="panel-heading">$100.00
   	   	 	  	 				<button style="float: right;" class="btn btn-danger btn-xs">AddToCart</button>
   	   	 	  	 			</div>
   	   	 	  	 		</div>
   	   	 	  	 	</div>-->
   	   	 	  	 </div>
   	   	 	  	 	<div class="panel-footer">&copy; Benya Jamiu Data Scientist(DSTI)-2019</div>
   	   	 	  	 </div>
   	   	 	  	
   	   	 	  </div>

   	   	 </div>
   	   	 <div class="col-md-1"></div>
   	   </div>

 <!--Pagination div-->
        <div class="row">
         <div class="col-md-12">
           <center>
               <ul class="pagination" id="pageno">
                <!--<li><a href="#">1</a></li>-->

                 
               </ul>
           </center>
         </div>
         <!--End of Pagination Code-->
       </div>

      
   </div>
	

</body>
</html>