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
    <title>Souvenir - NikahYuk</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.5/css/select.dataTables.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<?php
	include 'header.php';
?>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container pt-lg-5 pl-5 px-5">
            <h1 class="display-3">Paket Souvenir</h1>
            <p class="lead text-muted">Tersedia Beberapa Paket yang siap anda pilih dalam sekali pemesanan.</p>
            <p>
                <a href="#booknow" class="btn btn-success my-2">Book now<i class="fas fa-angle-double-right ml-1"></i></a>
            </p>
        </div>
    </section>

    <div class="container">
        <div class="container">
			<?php
        
				$sql="SELECT * FROM paket_category WHERE paket_nm LIKE '%Souvenir%'";
				$result = mysqli_query($user->db, $sql);
				if($result)
				{
					if(mysqli_num_rows($result) > 0)
					{
					//********************************************** Show Decoration Category***********************
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
												<div class='card-body'>
													<p>".$row['facility']."</p>
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
						
					}
				}
				else
				{
					echo "Cannot connect to server".$result;
				}
			?>
			
			<?php
        
				$sql="SELECT * FROM paket_category WHERE paket_nm LIKE '%Sovenir%'";
				$result = mysqli_query($user->db, $sql);
				if($result)
				{
					if(mysqli_num_rows($result) > 0)
					{
					//********************************************** Show Dekorasi Category***********************
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
												<div class='card-body'>
													<p>".$row['facility']."</p>
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
    
    
    
    
    




    <script src="my_js/slide.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>