<?php 
function getPro(){
    if(!isset($_GET['cat'])){
		  if(!isset($_GET['brand'])){
		  
		global $con;
		  
		$get_pro = " select * from products order by RAND() LIMIT 0,6";
		
		$run_pro = mysqli_query($con, $get_pro);
		
		while($row_pro = mysqli_fetch_array($run_pro)){
		  $pro_id = $row_pro['product_id'];
		  $pro_cat = $row_pro['product_cat'];
		  $pro_brand = $row_pro['product_brand'];
		  $pro_title = $row_pro['product_title'];
		  $pro_price = $row_pro['product_price'];
		  $pro_image = $row_pro['product_image'];	  
		  
		  echo "
		      <div id='single_product'>
			    <h3>$pro_title</h3>
				<img src='images/$pro_image' width='180' height='180' />
				
				<p><b> Price: $ $pro_price </b></p>
				
				<a>Details</a>
				
				<a href='index.php?add_cart=$pro_id'>
				  <button style='float:right'>Add to Cart</button>
				</a>
			  </div>
		  ";
		}
		}
		}
}
?>