<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">Product</h2>
		<div class="list-product-subtitle">
		</div>
		<div class="product-group">
			<div class="row">
				<?php 
				 
		  
		global $con;
				$con = new MySQLi('localhost','root','','sdlc');
				if (!$con)
					{
						echo "ket noi that bai";
					}
		  
		$get_pro = " select * from song";
		
		$run_pro = mysqli_query($con, $get_pro);
		
		while($row_pro = mysqli_fetch_array($run_pro)){
		  $pro_Id = $row_pro['SongId'];
		  $pro_Title = $row_pro['SongName'];
		  $pro_Price = $row_pro['SongPrice'];
		  $pro_desc = $row_pro['SongFile'];
		  $pro_keyword = $row_pro['SongImage'];
		  $pro_Image = $row_pro['SongTitle'];
		  $pro_File = $row_pro['SongTitle']	;
		  
		  echo "
		           <div class='col-md-3 col-sm-6 col-xs-12'>
			    <h3>$pro_Title</h3>
				<img src='images/$pro_Image' width='250' height='250' />
				<br/>
				<audio id='audio_1' controls> 
					<source src='images/$pro_File ' />
				</audio>
				
				<p><b> Price: $ $pro_Price </b></p>
				
				<a href='index.php?add_cart=$pro_Id'>
				  <button style='float:left'>Buy now</button>
				</a>
			  </div>
			  
			  
		  ";
		};
		?>				
			</div>
		</div>
	</div>
</div>