<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link crossorigin='anonymous' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' rel='stylesheet'>
		<script crossorigin='anonymous' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' src='https://code.jquery.com/jquery-3.4.1.slim.min.js'></script>
		<script crossorigin='anonymous' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
		<script crossorigin='anonymous' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
		<link rel="stylesheet" type="text/css" href="https:cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Ayushman yadav">
	</head>
	<body>
		<!--  -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary  " id="gharme">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
						<a class="nav-link active li-h" href="#har">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link li-s" href="#ser">services</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link li-c" href="#ct"   tabindex="-1" aria-disabled="true">contact us </a>
					</li>
					
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
		<!--  <--><br id="har"></-->
		<header class="text-center text-capitalize">
			<h1 class="display-2 font-weight-bold font-italic">Smart coder</h1>
		</header>
		<div class="container-fluid vga ">
			<div class="row bg-white">
				<div class="col-sm-12 col-md-6" id="ser"><img src="img/kindpng_1247304.png" class="img-fluid p-md-4" alt=""></div>
				<div class="col-md-6 col-sm-12 d-flex align-items-center justify-content-center " id="hm" style=" font: babloo da 2;font-size: 1.6rem;"><p>
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quibusdam deserunt suscipit repellat magni quam earum, debitis neque vitae ipsam quas explicabo ex aliquam totam molestias alias, quod dicta aut!</span>
					<span>Tempora omnis culpa vitae nobis delectus pariatur magni ad asperiores in voluptate, veniam harum unde a at iusto cumque iure ipsa minima, hic beatae totam nulla! Recusandae molestiae, consectetur excepturi.</span>
					<span>Natus repudiandae sequi eveniet reprehenderit commodi assumenda, voluptate incidunt at recusandae voluptatibus. Nihil ipsa aperiam explicabo ab. Distinctio explicabo possimus commodi veniam autem delectus quae, nisi! Natus officiis, laudantium ducimus.</span>
				</p></div>
			</div>
		</div>
		<div class="container-fluid vga ">
			<div class="row bg-white">
				<div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-center"style=" font: babloo da 2;font-size: 1.6rem;"><p>
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quibusdam deserunt suscipit repellat magni quam earum, debitis neque vitae ipsam quas explicabo ex aliquam totam molestias alias, quod dicta aut!</span>
					<span>Tempora omnis culpa vitae nobis delectus pariatur magni ad asperiores in voluptate, veniam harum unde a at iusto cumque iure ipsa minima, hic beatae totam nulla! Recusandae molestiae, consectetur excepturi.</span>
					<span>Natus repudiandae sequi eveniet reprehenderit commodi assumenda, voluptate incidunt at recusandae voluptatibus. Nihil ipsa aperiam explicabo ab. Distinctio explicabo possimus commodi veniam autem delectus quae, nisi! Natus officiis, laudantium ducimus.</span>
				</p></div>
				<div class="col-md-6 col-sm-12  order-md-1" ><img src="img/kindpng_1247304.png" class="img-fluid p-md-4 order-md-2" alt=""></div>
			</div>
		</div>
		<!--  -->
		<br id="ct">
		<!--  -->
		<div class="bg-dark">
			<div class="container text-white vga"><br>
				<form  method="GET" accept-charset="utf-8">
					<div class="text-center text-capitalize display-4">contact us</div><br><br>
					<label for="email56">Email</label><input type="email" class="form-control" name="emailcom" id="email56"><br><br>
					<label for="comment">comment</label><input type="comment" class="form-control" id="comment" row="15" col="56" name="comment"><br>
					<input type="submit" value="submit" class="btn btn-warning"><br>
				</form>
				<div class="text-center text-capitalize display-4">sign in</div><br><br>
				<form method="POST" action="indexsign.php" >
					<label for="inputEmail4">Email</label>
					<input type="email" name="email" class="form-control" id="inputEmail4">
					<label for="inputPassword4">Password</label>
					<input type="password" class="form-control" suggested="current-password"  name="password" id="inputPassword4">
					<label for="inputAddress">Address</label>
					<input type="text"  name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
					<label for="inputAddress2">Address 2</label>
					<input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
					
					<label for="inputCity">City</label>
					<input type="text" name="city" class="form-control" id="inputCity">
					
					<label for="inputState">State</label>
					<input id="inputState" name="state" class="form-control">
					
					</input>
					
					
					<label for="inputZip">pin</label>
					<input type="text" name="pin" class="form-control" id="inputZip">
					<br><br>
					
					
					<button type="submit" id="submit" class="btn btn-primary">Sign in</button>
					</form><div class="row"><div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div>
					<div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div><div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div>
					<div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div><div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div>
					<div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div><div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div>
					<div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div><div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div>
					<div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div><div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div>
					<div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div><div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div>
					<div class="col-sm-12 col-md-6 text-center text-capitalize text-white">link</div></div></div>
				</div>
				<style>
					body{
						background: url('./img/ocean-3605547_1920.jpg')fixed center;
						background-size: cover;
					}
					header{
						display: flex;
						align-items: center;
						justify-content: center;
						height: 100vh;
						width: 100%;
				color: #ffffff!important;
						font-weight: 120!important;
						font-size: open sans;
					}
					.vga{
						opacity: 0;
					}
					.animated{
						opacity: 1;
					}
					html{
						scroll-behavior:smooth;
					}
				</style>
				<script>
					$('#har').waypoint(function(){
						$('.navbar').toggleClass('fixed-top animated fadeIndown ');
						$('.li-h').addClass('active')
						$('.li-s').removeClass('active')
				$('.li-c').removeClass('active')
					});
					
					
					
					$('#ct').waypoint(function(){
						
						$('.li-s').removeClass('active')
						$('.li-h').removeClass('active')
						$('.li-c').addClass('active')
						
					},{
						offset:'20%'
					});
					$('#ser').waypoint(function(){
						
						$('.li-h').removeClass('active')
						$('.li-s').addClass('active')
						$('.li-c').removeClass('active')
						$('.container-fluid.vga').addClass('animated fadeInup')
					});
					$('#ser').waypoint(function(){
				$('.container-fluid.vga').addClass('animated fadeInup')
				},{
					offset:"50%"
				});
					$('#ct').waypoint(function(){
						
						
						$('.container.text-white').addClass('animated fadeInleft ')
						
					},{
						offset:'35%'
					});
					$('#submit').click(function(){
						
						
					})
				</script>
			</body>
		</html>
		
		<?php
		$server = '2a02:4780:bad:c0de::13';
		$xt = 'id13097434_root';
		$password = '03P4qUCm40l3XL3K';
		$database = 'signinblackcoal';
		$con = mysqli_connect($server,$xt,$password,$database);
		if ($con) {
			
		};
		error_reporting(0);
		?>
		<?php
		$_SESSION['user'] = $user = $_POST['email'];
		$_SESSION['password'] = $password = $_POST['password'];
		$_SESSION['address'] = $address = $_POST['address'];
		$_SESSION['address2'] = $address2= $_POST['address2'];
		$_SESSION['city'] = $city = $_POST['city'];
		$_SESSION['state'] = $state = $_POST['state'];
		$_SESSION['pin'] = $pin = $_POST['pin'];
		$data = "INSERT INTO signinblackcoal VALUES('','$user','$password','$address','$address2','$city','$state','$pin')";
		$query = mysqli_query($con,$data);
		$emailcom = $_GET['emailcom'];
		$comment = $_GET['comment'];
		$data23 = "INSERT INTO commentbox  VALUES ('','$emailcom','$comment')";
		$ghardgsj = mysqli_query($con,$data23);
		?>