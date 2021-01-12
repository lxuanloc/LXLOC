<!DOCTYPE html>
<html>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css"/>

	<link href="https://images-na.ssl-images-amazon.com/images/I/511pZ4HMYrL._AC_SY450_.jpg" rel="icon">

	<link rel="stylesheet" type="text/css" href="1.css">


<style>
	


</style> 
	<title>Music  pagoda  </title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="1.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="main">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
	  <a class="navbar-brand" href="index.php">Music4life</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#"> Category <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#"> <span class="glyphicon glyphicon-user"></span>Premium</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Category
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="#">Account</a>
                      <a class="dropdown-item" href="#">Help</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Merch</a>
                  </div>
              </li>
          </ul>
          
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              <a class="nav-link" href="login.php" >Login</a>
			  <a class="nav-link" href="Register.php" >Register</a>
			  <a class="nav-link" href="viewproduct.php">Cart </a>
			  <button class="btn btn-info btn-lg" href="demo.php"></button>
          </form>
      </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://www.w3schools.com/bootstrap4/ny.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.w3schools.com/bootstrap4/chicago.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/banner2.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slide -->
<!-- list product -->
<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">New product</h2>
		<div class="list-product-subtitle">
			
		</div>
		<div class="product-group">
			<div class="container">
	<div class="row mt-5 ">
		<h2 class="list-product-title">Product</h2>
		<div class="list-product-subtitle">
		</div>
		<div class="product-group">
			<div class="row">
				<?php 
				 
		  
		global $con;
				$con = new MySQLi('localhost','root','','musiccorp');
				if (!$con)
					{
						echo "ket noi that bai";
					}
		  
		$get_pro = " select * from song";
		
		$run_pro = mysqli_query($con, $get_pro);
		
		while($row_pro = mysqli_fetch_array($run_pro)){ ?>
		 
		
		        <div class='col-md-3 col-sm-6 col-xs-12'>
			    <h3><?PHP ECHO $row_pro['song_title'];?></h3>
				<img src='images/<?PHP ECHO $row_pro['song_image'];?>' width='400px' height='200px' />
				<br/>
				<audio id='audio_1' controls> 
					<source src='images/<?PHP ECHO $row_pro['song_file'];?> ' />
				</audio>
				
				<p><b> Price: <?PHP ECHO $row_pro['song_price'];?> </b></p>
				
				<a href='cart.php'>
				  <button style='float:left'>Buy now</button>
				</a>
			  </div>
		

			 <?PHP		
			} 
			?>				
			</div>
		</div>
	</div>
</div>
			

				
		
  

<!-- Load jquery trước khi load bootstrap js -->
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>



<div id="aplayer"></div>

	<!-- Jquery Link -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<!-- Bootstrap Link -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!-- APlayer Jquery link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>	

	<script>


		// NOW I CLICK album-poster TO GET CURRENT SONG ID
		$(".album-poster").on('click', function(e){
			var dataSwitchId = $(this).attr('data-switch');
			//console.log(dataSwitchId);

			// and now i use aplayer switch function see
			ap.list.switch(dataSwitchId); //this is static id but i use dynamic 

			// aplayer play function
			// when i click any song to play
			ap.play();
 
			// click to slideUp player see
			$("#aplayer").addClass('showPlayer');
		});

		const ap = new APlayer({
		    container: document.getElementById('aplayer'),
		    listFolded: true,
		    audio: [
		    {
		        name: 'Go Flex',// SONG NAME
		        artist: 'post malone',//ARTIST NAME
		        url: 'images/Post Malone - Go Flex.mp3',// PATH NAME AND SONG URL
		        cover: 'https://static.vibe.com/files/2016/04/post-malone-youtube-compressed.jpg' // COVER images
		    },
			{
		        name: 'Blueberry Faygo',  
		        artist: 'Lil Mosey	', 
		        url: 'images/Blueberry Faygo - Lil Mosey.mp3', 
		        cover: 'https://i.ytimg.com/vi/xreinp0-Yj4/maxresdefault.jpg'
		    },
		    {
		        name: 'rap cham thoi ',  
		        artist: 'rpt	', 
		        url: 'images/rct.mp3', 
		        cover: 'https://i.ytimg.com/vi/WCCp0zbnR50/hqdefault.jpg'
		    },
			


		    ]
		});
	</script>
</body>
</html>