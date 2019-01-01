<?php

  session_start();

  include "db.php";

//This code is for Categories
if(isset($_POST["category"])){

	$category_query = "SELECT * FROM categories";

	$run_query = mysqli_query($con, $category_query);

	echo "

         <div class='nav nav-pills nav-stacked'>
   	   	<li class='active'><a href='#''><h4>Categories</h4></a></li>
   	   	 ";

	if(mysqli_num_rows($run_query) > 0){

		while($row = mysqli_fetch_array($run_query)){

			$cat_id  = $row["cat_id"];
			$cat_title  = $row["cat_title"];

			echo "
               <li><a href='#' class='category' cat_id='$cat_id'>$cat_title</a></li>
			";

		}

		echo "</div>";

	}

	
}

//This code is for the Brands

if(isset($_POST["brand"])){

	$brand_query = "SELECT * FROM brands";

	$run_query = mysqli_query($con, $brand_query);

	echo "

         <div class='nav nav-pills nav-stacked'>
   	   	<li class='active'><a href='#''><h4>Brands</h4></a></li>
   	   	 ";

	if(mysqli_num_rows($run_query) > 0){

		while($row = mysqli_fetch_array($run_query)){

			$brand_id  = $row["brand_id"];
			$brand_title  = $row["brand_title"];

			echo "
               <li><a href='#' class='selectBrand' brand_id='$brand_id'>$brand_title</a></li>
			";

		}

		echo "</div>";

	}

	
}
if(isset($_POST["page"])){

  $sql8 = "SELECT * FROM products";
  $run_query = mysqli_query($con, $sql8);
  $count = mysqli_num_rows($run_query);
  //echo $count;
  $pageno =ceil($count/9);

  for($i=1; $i<=$pageno; $i++){
    echo "
        <li><a href='#' page='$i' id='page'>$i</a></li>

    ";
  }


}
//This PHP code is to sql for the products from Database: and Pagination
if(isset($_POST["getProduct"])){

  $limit = 9;
  if(isset($_POST["setPage"])){

      $pageno = $_POST["pageNumber"];

      $start = ($pageno * $limit) - $limit;
  }else{
    $start = 0;
  }

	//$product_query = "SELECT * FROM products ORDER BY RAND() LIMIT 0,9";

  //$product_query = "SELECT * FROM products LIMIT 0,9";

  //$product_query = "SELECT * FROM products LIMIT 10,9";

  $product_query = "SELECT * FROM products  LIMIT  $start, $limit";

  //$product_query = "SELECT * FROM products";

	$run_query  = mysqli_query($con,$product_query);

	if(mysqli_num_rows($run_query) > 0){

		while($row = mysqli_fetch_array($run_query)){

			$product_id    = $row['product_id'];
			$product_cat   = $row['product_cat'];
			$product_brand = $row['product_brand'];
			$product_title = $row['product_title'];
			$product_price = $row['product_price'];
			$product_image = $row['product_image'];

			echo "

                  <div class='col-md-4'>
   	   	 	  	 		<div class='panel panel-info'>
   	   	 	  	 			<div class='panel-heading'>$product_title</div>
   	   	 	  	 			<div class='panel-body'>
   	   	 	  	 				<img src='project_images/$product_image' height='250px' width='180px;'>
   	   	 	  	 			</div>
   	   	 	  	 			<div class='panel-heading'>$.$product_price.00
   	   	 	  	 				<button pid='$product_id' style='float: right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
   	   	 	  	 			</div>
   	   	 	  	 		</div>
   	   	 	  	 		</div>


			";

		}

	}
	
}


//This PHP code is  sql for the Particular Categories from Database:
if(isset($_POST["get_selected_category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"])){

   if(isset($_POST["get_selected_category"])){

       $id = $_POST["cat_id"];

       $sql = "SELECT * FROM products WHERE product_cat = '$id'";		

	}else if(isset($_POST["selectBrand"])) {

		$id = $_POST["brand_id"];

        $sql = "SELECT * FROM products WHERE product_brand = '$id'";		


	} else{

		$keyword = $_POST["keyword"];

        $sql = "SELECT * FROM products WHERE product_keywords  LIKE '%$keyword%'";

	}
 

   $run_query  = mysqli_query($con, $sql);

   while($row = mysqli_fetch_array($run_query)){

   	  $product_id    = $row['product_id'];
			$product_cat   = $row['product_cat'];
			$product_brand = $row['product_brand'];
			$product_title = $row['product_title'];
			$product_price = $row['product_price'];
			$product_image = $row['product_image'];

			echo "

                  <div class='col-md-4'>
   	   	 	  	 		<div class='panel panel-info'>
   	   	 	  	 			<div class='panel-heading'>$product_title</div>
   	   	 	  	 			<div class='panel-body'>
   	   	 	  	 				<img src='project_images/$product_image' height='250px' width='180px;'>
   	   	 	  	 			</div>
   	   	 	  	 			<div class='panel-heading'>$.$product_price.00
   	   	 	  	 				<button pid='$product_id' style='float: right;' id= 'product' class='btn btn-danger btn-xs'>AddToCart</button>
   	   	 	  	 			</div>
   	   	 	  	 		</div>
   	   	 	  	 		</div>
			";
        
   }

}

if(isset($_POST["addToProduct"])){

  if(isset($_SESSION["uid"])){


	$p_id = $_POST["proId"];
	$user_id  = $_SESSION["uid"];

	$sql2 = "SELECT * FROM cart WHERE  p_id = '$p_id' AND user_id = '$user_id'";
	$run_query = mysqli_query($con, $sql2);
	$count = mysqli_num_rows($run_query);
	if($count > 0){
		echo "
         
               <div class='alert alert-danger'>
                  <a href='#' class='close' data-dismiss='alert' 
                  arial-label='close'>&times;</a>
                <b> Product is already added into the cart continue shopping</b>
                 </div>
   ";

	}else{
		$sql3 = "SELECT * FROM products WHERE product_id = '$p_id'";
		$run_query = mysqli_query($con, $sql3);
		$row = mysqli_fetch_array($run_query);

		     $id        = $row["product_id"];
		     $pro_name  = $row["product_title"];
		     $pro_image = $row["product_image"];
		     $pro_price = $row["product_price"];

		   $sql4 ="INSERT INTO cart (cart_id, p_id, ip_add, user_id, product_title,product_image, qty, price, total_amt) VALUES (NULL, '$p_id', '0', '$user_id', '$pro_name', '$pro_image', '1', '$pro_price', '$pro_price')";

		   $run_query = mysqli_query($con, $sql4);

		   if($run_query){

		   	echo "
               <div class='alert alert-success'>
                  <a href='#' class='close' data-dismiss='alert' 
                  arial-label='close'>&times;</a>
                <b>Product is Added..!</b>
                 </div>
		   	";
        
		   } 

	}
  //Error here check later
      // echo "
      //          <div class='alert alert-success'>
      //             <a href='#' class='close' data-dismiss='alert' 
      //             arial-label='close'>&times;</a>
      //           <b>Sorry ...You need to sign Up to Purchase any Items</b>
      //            </div>
      //   ";    

  


}
}

if(isset($_POST["get_cart_product"]) || isset($_POST["cart_checkout"])){

	$uid = $_SESSION["uid"];

    $sql5 = "SELECT * FROM cart WHERE user_id = '$uid'";
    $run_query = mysqli_query($con, $sql5);
    $count = mysqli_num_rows($run_query);
    if($count > 0){

    	$no = 1;

      $total_amt = 0;

    	while($row = mysqli_fetch_array($run_query)){
   
        $cart_id  =    $row["cart_id"];
    		$pro_id   =     $row["p_id"];
    		$pro_name =     $row["product_title"];
    		$pro_image =    $row["product_image"];
    		$qty = $row["qty"];
    		$pro_price =    $row["price"];
    		$total = $row["total_amt"];

        //Get total amount in from Database:
        $price_array = array($total);
        $total_sum = array_sum($price_array);
        $total_amt = $total_amt + $total_sum;

        //Here you need to store it in cookies
         //setcookie("ta",$total_amt, strtotime("+1 day"), "/","","",TRUE);


    		if(isset($_POST["get_cart_product"])){

    			echo "
    		<div class='row'>
             <div class='col-md-3'>$no</div>
              <div class='col-md-3'><img src='project_images/$pro_image' width='40px' height='40px'></div>
              <div class='col-md-3'>$pro_name</div>
              <div class='col-md-3'>$$pro_price.00</div>
              </div>
 		";

 		$no = $no + 1;

    		}else{

    			echo "

                <div class='row'>
              <div class='col-md-2'>
                
               <div class='btn-group'>
                 <a href='#' remove_id ='$pro_id' class='btn btn-danger remove'><span class='glyphicon glyphicon-trash'></span></a>
                 <a href='#' update_id='$pro_id' class='btn btn-primary update'><span class='glyphicon glyphicon-ok-sign'></span></a>
               </div>

              </div>
              <div class='col-md-2'><img src='project_images/$pro_image' width='100px' height='100'></div>
              <div class='col-md-2'>$pro_name</div>
              <div class='col-md-2'><input type='text'  class='form-control qty' pid='$pro_id' id='qty-$pro_id' value='$qty'></div>
              <div class='col-md-2'><input type='text'  class='form-control price' pid='$pro_id'  value='$pro_price' id='price-$pro_id'  disabled></div>
              <div class='col-md-2'><input type='text'  class='form-control total' pid='$pro_id'  value='$total' id='total-$pro_id' disabled></div>
            </div>


    			";

    		}    		

    	}
      if(isset($_POST["cart_checkout"])){

          echo " <div class='row'>
               <div class='col-md-8'></div>
               <div class='col-md-4'>
                 <h1 style='float:right;'>Total $$total_amt</h1>
               </div>
             </div>
             ";
      }


      // Place the code of PAYPAL HTML FORM CODE HERE

      echo '

      <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
      <input type="hidden" name="cmd" value="_cart">
      <input type="hidden" name="business" value="dsti2019@gmail.com">
      <input type="hidden" name="upload" value="1">';

      $x = 0;

      $uid = $_SESSION["uid"]; 
      $sql10 = "SELECT * FROM cart WHERE user_id = '$uid'";
      $run_query = mysqli_query($con,$sql10);
      while($row = mysqli_fetch_array($run_query)){
        $x++;

     echo '<input type="hidden" name="item_name_'.$x.'" value="'.$row["product_title"].'">
      <input type="hidden" name="item_number_'.$x.'" value="'.$x.'">
      <input type="hidden" name="amount_'.$x.'" value="'.$row["price"].'">
      <input type="hidden" name="quantity_'.$x.'" value="'.$row["qty"].'">';
     

    }

     echo '

      <input type="hidden" name="return" value="http://www.shaffiyah.com/ShoppingCart/payment_success.php" />
      <input type="hidden" name="cancel_return" value="http://www.shaffiyah.com/ShoppingCart/cancel.php"/> 
       <input type="hidden" name="currency_code" value="USD"/> 
       <input type="hidden" name="custom" value="'.$uid.'"/> 

      <input style="float:right;marging-right:100px;" type="image" name="submit"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif"
    alt="Add to Cart">
    <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >


      </form>';







      
    }
}


//Write comment here...

if(isset($_POST["cart_count"]) AND isset($_SESSION["uid"])){
  $uid = $_SESSION["uid"];
  $sql9 = "SELECT * FROM cart WHERE user_id = '$uid'";
  $run_query = mysqli_query($con,$sql9);
  echo $count = mysqli_num_rows($run_query);


}


if(isset($_POST["removeFromCart"])){

	$pid = $_POST["removeId"];

	$uid = $_SESSION["uid"];

	$sql6 = "DELETE FROM cart WHERE user_id = '$uid' AND p_id ='$pid'";
	$run_query = mysqli_query($con, $sql6);

	if($run_query){
		echo "   
          <div class='alert alert-danger'>
                  <a href='#' class='close' data-dismiss='alert' 
                  arial-label='close'>&times;</a>
                <b>Product Has been removed from the cart continue Shopping..!</b>
                 </div>

		";
	}

}

if(isset($_POST["updateProduct"])){
    $uid = $_SESSION["uid"];
    $pid = $_POST["updateId"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];
    $total = $_POST["total"];


    $sql7 = "UPDATE cart SET qty= '$qty', price = '$price', total_amt = '$total'
     WHERE  user_id = '$uid' AND p_id='$pid'";

     $run_query = mysqli_query($con, $sql7);

     if($run_query){

      echo "
              <div class='alert alert-success'>
                  <a href='#' class='close' data-dismiss='alert' 
                  arial-label='close'>&times;</a>
                <b>Your Total Amount Has been Updated..!</b>
                 </div>

      ";
     }
}

?>