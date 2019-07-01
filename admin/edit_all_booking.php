<?php
    include_once 'include/class.user.php'; 
    $user=new User(); 

$id=$_GET['id'];

$sql="SELECT * FROM paket WHERE paket_id='$id'";
$query=mysqli_query($user->db, $sql);
$row = mysqli_fetch_array($query);
 

if(isset($_REQUEST[ 'submit'])) 
{ 
    extract($_REQUEST); 
    $result=$user->edit_all_room($checkin, $checkout, $name, $phone,$id);
    if($result)
    {
        echo "<script type='text/javascript'>
              alert('".$result."');
         </script>";
    }

   
} 
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Booking NikahYuk - Admin Panel</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="./css/hi.css" rel="stylesheet">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="./js/hi.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>

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
    <div class="container-fluid">

        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
			<a class="navbar-brand" href="#">
				Edit Booking NikahYuk - Admin Panel
			</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            </button> <a class="navbar-brand" href="admin.php?q=logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </nav>


    </div>
    <div class="container-fluid">


        <div class="sidebar left">
            <ul class="list-sidebar bg-defoult">
                <li>
                    <a href="admin.php" data-toggle="collapse" data-target="#dashboard" class="collapsed active">
                        <i class="fa fa-home fa-w-14 fa-2x" title="Admin Dashboard"></i>
                        <span class="nav-label">  </span>
                    </a>
                </li>
                <li>
                    <a href="registration.php" data-toggle="collapse" data-target="#dashboard" class="collapsed active">
                        <i class="fas fa-user-plus fa-w-14 fa-2x" title="Tambah Admin"></i>
                        <span class="nav-label">  </span>
                    </a>
                </li>
                <li>
                    <a href="addpaket.php" data-toggle="collapse" data-target="#dashboard" class="collapsed active">
                        <i class="far fa-plus-square fa-w-14 fa-2x" title="Tambah Paket"></i> <span class="nav-label">  </span>
                    </a>
                </li>
                <li>
                    <a href="show_paket_cat.php" data-toggle="collapse" data-target="#dashboard" class="collapsed active">
                        <i class="far fa-check-square fa-w-14 fa-2x" title="Ubah Paket"></i> <span class="nav-label">  </span>
                    </a>
                </li>
                <li>
                    <a href="show_paket_cat.php" data-toggle="collapse" data-target="#dashboard" class="collapsed active">
                        <i class="far fa-square fa-w-14 fa-2x" title="Lihat Paket"></i> <span class="nav-label">  </span>
                    </a>
                </li>
                <li>
                    <a href="booking.php" data-toggle="collapse" data-target="#dashboard" class="collapsed active">
                        <i class="far fa-calendar-plus fa-w-14 fa-2x" title="Tambah Pesanan"></i> <span class="nav-label">  </span>
                    </a>
                </li>
                <li>
                    <a href="show_all_booking.php" data-toggle="collapse" data-target="#dashboard" class="collapsed active">
                        <i class="far fa-calendar-check fa-w-14 fa-2x" title="Edit Pesanan"></i> <span class="nav-label">  </span>
                    </a>
                </li>
                <li>
                    <a href="show_all_booking.php" data-toggle="collapse" data-target="#dashboard" class="collapsed active">
                        <i class="far fa-calendar fa-w-14 fa-2x" title="Lihat Pesanan"></i> <span class="nav-label">  </span>
                    </a>
                </li>
                <li>
                    <a href="admin.php?q=logout" data-toggle="collapse" data-target="#dashboard" class="collapsed active">
                        <i class="fas fa-sign-out-alt fa-w-14 fa-2x" title="Keluar"></i> <span class="nav-label">  </span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="contan-body">
            <div class="col-12">
                <!-- Main Content -->

                    <div class="side-body">

						<h2>EDIT, <?php echo  $row['paket_cat']?> by <?php echo $row['name'] ?></h2>
						<hr>
						<form action="" method="post" name="room_category">
						  
						  
						   <div class="form-group">
								<label for="checkin">Check In :</label>&nbsp;&nbsp;&nbsp;
								<input type="text" class="form-control datepicker" name="checkin" value="<?php echo $row['checkin']?>">

							</div>
						   
						   <div class="form-group">
								<label for="checkout">Check Out:</label>&nbsp;
								<input type="text" class="form-control datepicker" name="checkout" value="<?php echo $row['checkout']?>">
							</div>
							<div class="form-group">
								<label for="name">Enter Your Full Name:</label>
								<input type="text" class="form-control" name="name" value="<?php echo $row['name']?>" required>
							</div>
							<div class="form-group">
								<label for="phone">Enter Your Phone Number:</label>
								<input type="text" class="form-control" name="phone" value="<?php echo $row['phone']?>" required>
							</div>
							 
						   
							<button type="submit" class="btn btn-lg btn-primary button" name="submit">Update</button>
							<a href="admin.php" class="btn btn-lg btn-warning button" >Cancel</a>


						</form>

                    </div>
  
            </div>
        </div>

    </div>
	
</body>
</html>