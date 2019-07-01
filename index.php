<?php
include_once 'admin/include/class.user.php'; 
$user=new User();
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
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"><!--P--->
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.5/css/select.dataTables.min.css"><!--P--->
    <link rel="stylesheet" href="css/main.css"><!--P--->
</head>

<?php
	include 'header.php';
?>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container pt-lg-5 pl-5 px-5">
            <h1 class="display-3">Selamat Datang di NikahYuk.com</h1>
            <p class="lead text-muted">NikahYuk.com memiliki harga murah, Konsultasi tentang pernikahan / wedding dan mempunyai tenaga kerja yang profesional sehingga dapat di selesaikan tepat waktu</p>
            <p>
                <a href="#booknow" class="btn btn-success my-2">Book now<i class="fas fa-angle-double-right ml-1"></i></a>
            </p>
        </div>
    </section>

    <div class="container">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">About</h1>
            <p class="lead">Menyediakan berbagai kebutuhan Pernikahan anda mulai dari Tenda, Dekorasi, Gaun Pengantin, Alat-alat Prasmanan serta MUA yang berpengalaman dan Terpercaya.</p>
        </div>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">
			<?php
        
				$sql="SELECT * FROM paket_category WHERE paket_nm LIKE '%Paket%'";
				$result = mysqli_query($user->db, $sql);
				if($result)
				{
					if(mysqli_num_rows($result) > 0)
					{
					//********************************************** Show Room Category***********************
						while($row = mysqli_fetch_array($result))
						{
							echo "  <div class='row'>
										<div class='col-md-1'>
										</div>
										<div class='col-md-10'>
											<div class='card mb-4 box-shadow'>
												<a name='booknow'></a>
												<div class='card-header'>
													<h5 class='my-0 font-weight-normal'>".$row['paket_nm']."</h5>
												</div>
												<img class='card-img-top' style='width: 100%; height: 50%; display: block;' src='images/kp.jpg' data-holder-rendered='true'>
												<div class='card-body'>
													<p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. <br><br>
													<b>Facilities: ".$row['facility']." </b>
													</p>
													<div class='d-flex justify-content-between align-items-center'>
														<div class='btn-group'>
															<a href='./booknow.php?paketname=".$row['paket_nm']."'><button class='btn btn-sm btn-outline-success'>Book </button></a>
														</div>
														<small class='text-muted'><b>Price: Rp ".$row['price']."</b></small>
													</div>
												</div>
											</div>
										</div>
										<div class='col-md-1'>
										</div>
									</div>"; //echo end
						}	  
					}
					else
					{
						echo "NO Data Exist";
					}
				}
				else
				{
					echo "Cannot connect to server".$result;
				}
			?>
        </div>
    </div>

</main>

<footer class="container">
    <p>&copy; NikahYuk.com	 2019</p>
</footer>

    <!--div class="container">
      
      
       <img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Online Reservation</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
                </ul>
            </div>
        </nav>
        



    </div-->
    
    
    
    
    




    <script src="my_js/slide.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>