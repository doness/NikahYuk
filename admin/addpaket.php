<?php
include_once 'include/class.user.php'; 
$user=new User(); 
 

if(isset($_REQUEST[ 'submit'])) 
{ 
    extract($_REQUEST); 
    $result=$user->add_paket($paket_nm, $paket_qty, $facility, $price);
    if($result)
    {
        echo "<script type='text/javascript'>
              alert('Paket/Item Berhasil di Tambah');
				  
				  window.location.href = 'admin.php';
         </script>";
    }
    else
    {
         echo $result;
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
    <title>Add Paket NikahYuk - Admin Panel</title>
    <meta name="author" content="LayoutIt!">
    <link href="./css/hi.css" rel="stylesheet">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="./js/hi.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
	<script src="./ckeditor/ckeditor.js"></script>

</head>
<body>
    <div class="container-fluid">

        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
			<a class="navbar-brand" href="#">
				Add Paket NikahYuk - Admin Panel
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

						<h2>Add Paket/Item Category</h2>
						<hr>
						<form action="" method="post" name="room_category">
							<div class="form-group">
								<label for="roomname">Nama Paket/Item:</label>
								<input type="text" class="form-control" name="paket_nm" placeholder="Paket 6 Juta-an" required>
							</div>
							 <div class="form-group">
								<label for="qty">Total Stok:</label>&nbsp;					
								<input type="text" class="form-control" name="paket_qty" placeholder="15" required>
							</div>
							<div class="form-group">
								<label for="Facility">Fasilitas</label>
								<textarea id="ckEditor" class="form-control" rows="5" name="facility"></textarea>
							</div>
						   <div class="form-group">
								<label for="price">Harga:</label>
								<input type="text" class="form-control" name="price" placeholder="6000000" required>
							</div>
							<button type="submit" class="btn btn-lg btn-primary button" name="submit" value="Add Room">Add</button>
							<a href="admin.php" class="btn btn-lg btn-warning button" >Cancel</a>
						</form>

                    </div>
  
            </div>
        </div>

    </div>
	
</body>
<script>
    var ckEditor = document.getElementById('ckEditor');
    if (ckEditor != undefined && ckEditor != null) {
        CKEDITOR.replace('ckEditor', {
            language: 'en',
            filebrowserBrowseUrl: 'path',
            removeButtons: 'Save',
        });
    }
    function selectFile(fileUrl) {
        window.opener.CKEDITOR.tools.callFunction(1, fileUrl);
    }
    CKEDITOR.on('dialogDefinition', function (ev) {
            var editor = ev.editor;
            var dialogDefinition = ev.data.definition;

            // This function will be called when the user will pick a file in file manager
            var cleanUpFuncRef = CKEDITOR.tools.addFunction(function (a) {
                $('#ck_file_manager').modal('hide');
                CKEDITOR.tools.callFunction(1, a, "");
            });
            var tabCount = dialogDefinition.contents.length;
            for (var i = 0; i < tabCount; i++) {
                var browseButton = dialogDefinition.contents[i].get('browse');
                if (browseButton !== null) {
                    browseButton.onClick = function (dialog, i) {
                        editor._.filebrowserSe = this;
                        var iframe = $('#ck_file_manager').find('iframe').attr({
                            src: editor.config.filebrowserBrowseUrl + '&CKEditor=body&CKEditorFuncNum=' + cleanUpFuncRef + '&langCode=en'
                        });
                        $('#ck_file_manager').appendTo('body').modal('show');
                    }
                }
            }

        }
    );
</script>
</html>