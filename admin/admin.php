<?php session_start();
include_once 'include/class.user.php';
$user=new User();
$uid=$_SESSION[ 'uid']; 
if(!$user->get_session()) 
{ 
    header("location:login.php"); 
} 
if(isset($_GET['q'])) 
{ 
    $user->user_logout();
 header("location:index.php"); 
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard - Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="./css/dd.css" rel="stylesheet" id="ddcss">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
	
</head>

<body>

	<div class="container">
	<section>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title"><span class="glyphicon glyphicon-user"></span> Hello, Welcome to Admin Dashboard</div>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
							  <!-- dblue -->
							  <a href="registration.php" target="_blank" class="btn btn-dblue btn-lg" role="button"><span class="fas fa-user-plus fa-w-14 fa-3x"></span> <br />Tambah <br />Admin</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
							  <!-- Paket -->							  
							  <a href="addpaket.php" target="_blank" class="btn btn-lilac btn-lg" role="button"><span class="far fa-plus-square fa-w-14 fa-3x"></span> <br/>Tambah<br />Paket/Item</a>
							  <a href="show_paket_cat.php" target="_blank" class="btn btn-lilac btn-lg" role="button"><span class="far fa-check-square fa-w-14 fa-3x"></span> <br/>Ubah <br />Paket/Item</a>
							  <a href="show_paket_cat.php" target="_blank" class="btn btn-lilac btn-lg" role="button"><span class="far fa-square fa-w-14 fa-3x"></span> <br/>Lihat <br />Paket/Item</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
							  <!-- dred -->
							  <a href="booking.php" target="_blank" class="btn btn-dred btn-lg" role="button"><span class="far fa-calendar-plus fa-w-14 fa-3x"></span> <br/>Pesan<br /> Paket/Item</a>
							  <a href="show_all_booking.php" target="_blank" class="btn btn-dred btn-lg" role="button"><span class="far fa-calendar-check fa-w-14 fa-3x"></span> <br />Edit<br />Pesanan</a>
							  <a href="show_all_booking.php" target="_blank" class="btn btn-dred btn-lg" role="button"><span class="far fa-calendar fa-w-14 fa-3x"></span> <br/>Lihat<br />Pesanan</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
							  <!-- dblue -->
							  <a href="admin.php?q=logout" class="btn btn-dred btn-lg" role="button"><span class="fas fa-sign-out-alt fa-w-14 fa-3x"></span><br><br>Logout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>

</body>

</html>