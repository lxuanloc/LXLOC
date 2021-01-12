 <div class="form_box">

	 <form action="" method="post" enctype="multipart/form-data">
	   
	   <table align="center" width="100%">
	     
		 <tr>
		   <td colspan="7">
		   <h2>Add Song</h2>
		   <div class="border_bottom"></div><!--/.border_bottom -->
		   </td>
		 </tr>
		 
		 <tr>
		   <td><b>Song  Title:</b></td>
		   <td><input type="text" name="product_title" size="60" required/></td>
		 </tr>
		 
		 <tr>
		   <td><b>Song Category:</b></td>
		   <td>
		    <select name="product_cat">
			  <option>Select a Category</option>
			  
			  <?php 
			  $get_cats ="select * from category";
		
		$run_cats = mysqli_query($con, $get_cats);
		
		while($row_cats=mysqli_fetch_array($run_cats)){
		    $cat_id = $row_cats['category_id'];
			
			$cat_title = $row_cats['category_name'];

			
			echo "<option value='$cat_id'>$cat_title</option>";
		}
			  ?>
			</select>
		   </td>
		   
		 </tr>
		 
		 <tr>
		   <td><b>Song Brand:</b></td>
		   <td>
		    <select name="product_brand">
			  <option>Select a Brand</option>
			<?php
			  $get_brands = "select * from brands";
		
		$run_brands = mysqli_query($con, $get_brands);
		
		while($row_brands = mysqli_fetch_array($run_brands)){
		     $brand_id = $row_brands['brand_id'];
			 
			 $brand_title = $row_brands['brand_title'];
			 
			 echo "<option value='$brand_id'>$brand_title</option>";
		}
		
		?>
			</select>
		   </td>
		   
		 </tr>
		
        <tr>
		  <td><b>song Image: </b></td>
		  <td><input type="file" name="song_image" /></td>
		</tr>
		
		<tr>
		  <td><b>song Price: </b></td>
		  <td><input type="text" name="song_price" required/></td>
		</tr>
		
		<tr>
		   <td valign="top"><b>song Description:</b></td>
		   <td><textarea name="song_desc"  rows="10"></textarea></td>
		</tr>
		
		
		<tr>
		  <td><b>song Keywords: </b></td>
		  <td><input type="text" name="song_keywords" required/></td>
		</tr>
		
		<tr>
		   <td></td>
		   <td colspan="7"><input type="submit" name="insert_post" value="song Product"/></td>
		</tr>
	   </table>
	   
	 </form>
	 
  </div><!-- /.form_box -->

<?php 

if(isset($_POST['insert_post'])){
   $song_title = $_POST['song_title'];
   $song_cat = $_POST['songt_cat'];
   $song_brand = $_POST['song_brand'];
   $song_price = $_POST['song_price'];
   $song_desc = trim(mysqli_real_escape_string($con,$_POST['song_desc']));
   $song_keywords = $_POST['song_keywords']; 
   $song_gendre
   
   
   // Getting the image from the field
   $song_image  = $_FILES['song_image']['name'];
   $song_image_tmp = $_FILES['song_image']['tmp_name'];
   
   move_uploaded_file($product_image_tmp,"song_images/$product_image");
   
   $insert_product = " insert into song (song_id,song_title,song_price,song_desc,song_image,song_keywords,song_file) 
   values ('$song_cat','$song_brand','$song_title','$song_price','$song_desc','$song_image','$song_keywords') ";

   $insert_pro = mysqli_query($con, $insert_product);
   
   if($insert_pro){
    echo "<script>alert('Product Has Been inserted successfully!')</script>";
	
	//echo "<script>window.open('index.php?insert_product','_self')</script>";
   }
   
   }
?>