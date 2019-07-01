<?php
    include_once 'admin/include/class.user.php'; 
    $user=new User(); 

    $paket_nm=$_GET['paketname'];

    if(isset($_REQUEST[ 'submit'])) 
    { 
        extract($_REQUEST); 
        $result=$user->booknow($checkin, $checkout, $name, $phone, $paket_nm);
        if($result)
        {
            echo "			
			<script type='text/javascript'>
                  alert('".$result."');
            </script>";
        }


        
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>NikahYuk</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--P--->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script><!--P--->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script><!--P--->
	<script>
	$( function() {
		$( ".datepicker" ).datepicker({
					dateFormat : 'yy-mm-dd'
		});
	});
	</script>    <!--P--->
</head>

<body>
<header>
    <div class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark box-shadow">
		<a class="navbar-brand" href="#">NikahYuk</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			  <li class="nav-item">
				<a class="nav-link" href="./">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="paket.php">Paket Pernikahan</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Wedding Detail</a>
			  </li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
			  <input class="form-control mr-sm-2" type="search" placeholder="Search">
			  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		  </div>
    </div>
</header>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container pt-lg-5 pl-5 px-5">
            <h1 class="display-3">Apakah anda yakin dengan memilih produk <?php echo $paket_nm; ?> ?</h1>
            <p class="lead text-muted">Atau ingin ganti produk?</p>
            <p>
                <a href="./" class="btn btn-success my-2">Ganti Sekarang!<i class="fas fa-angle-double-right ml-1"></i></a>
            </p>
        </div>
    </section>

    <div class="container">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Isi data diri anda untuk memesan <?php echo $paket_nm; ?></h1>
            <p class="lead">Lengkapi data anda dan isikan Nomor HP anda dengan benar. untuk di hubungi oleh admin berikutnya.</p>
        </div>
    </div>
	
	
	
    <div class="album py-5 bg-light">
      
      <div class="container">
            <form action="" method="post" name="room_category">
              
              
               <div class="form-group">
                    <label for="checkin">Sewa Mulai Dari:</label>&nbsp;&nbsp;&nbsp;
                    <input type="text" class="form-control datepicker" name="checkin" placeholder="YYYY-MM-DD" required>

                </div>
               
               <div class="form-group">
                    <label for="checkout">Sewa Hingga:</label>&nbsp;
                    <input type="text" class="form-control datepicker" name="checkout" placeholder="YYYY-MM-DD" required>
                </div>
                <div class="form-group">
                    <label for="name">Nama Lengkap:</label>
                    <input type="text" class="form-control" name="name" placeholder="Jhon Wicky" required>
                </div>
                <div class="form-group">
                    <label for="phone">Nomor Telepon:</label>
                    <input type="text" class="form-control" name="phone" placeholder="081XXXXXXX" required>
                </div>
                 
               
                <button type="submit" class="btn btn-lg btn-primary button" name="submit">Book Now</button>
            </form>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!--P--->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script><!--P--->
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
</body>

</html>