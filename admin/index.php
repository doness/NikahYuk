<?php session_start(); include_once 'include/class.user.php'; $user=new User(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script language="javascript" type="text/javascript">
        function submitlogin() {
            var form = document.login;
            if (form.emailusername.value == "") {
                alert("Enter email or username.");
                return false;
            } else if (form.password.value == ) {
                alert("Enter Password.");
                return false;
            }
        }
    </script>
	
	<style>

		.box {
			width: 500px;
			margin: 200px 0;
		}

		.shape1{
			position: relative;
			height: 150px;
			width: 150px;
			background-color: #0074d9;
			border-radius: 80px;
			float: left;
			margin-right: -50px;
		}
		.shape2 {
			position: relative;
			height: 150px;
			width: 150px;
			background-color: #0074d9;
			border-radius: 80px;
			margin-top: -30px;
			float: left;
		}
		.shape3 {
			position: relative;
			height: 150px;
			width: 150px;
			background-color: #0074d9;
			border-radius: 80px;
			margin-top: -30px;
			float: left;
			margin-left: -31px;
		}
		.shape4 {
			position: relative;
			height: 150px;
			width: 150px;
			background-color: #0074d9;
			border-radius: 80px;
			margin-top: -25px;
			float: left;
			margin-left: -32px;
		}
		.shape5 {
			position: relative;
			height: 150px;
			width: 150px;
			background-color: #0074d9;
			border-radius: 80px;
			float: left;
			margin-right: -48px;
			margin-left: -32px;
			margin-top: -30px;
		}
		.shape6 {
			position: relative;
			height: 150px;
			width: 150px;
			background-color: #0074d9;
			border-radius: 80px;
			float: left;
			margin-right: -20px;
			margin-top: -35px;
		}
		.shape7 {
			position: relative;
			height: 150px;
			width: 150px;
			background-color: #0074d9;
			border-radius: 80px;
			float: left;
			margin-right: -20px;
			margin-top: -57px;
		}
		.float {
			position: absolute;
			z-index: 2;
		}

		.form {
			margin-left: 145px;
		}
		.box {
			width: 500px;
			margin: 200px 0;
		}

		.shape1{
			position: relative;
			height: 150px;
			width: 150px;
			background-color: #0074d9;
			border-radius: 80px;
			float: left;
			margin-right: -50px;
		}
		.shape2 {
			position: relative;
			height: 150px;
			width: 150px;
			background-color: #0074d9;
			border-radius: 80px;
			margin-top: -30px;
			float: left;
		}
		.shape3 {
			position: relative;
			height: 150px;
			width: 150px;
			background-color: #0074d9;
			border-radius: 80px;
			margin-top: -30px;
			float: left;
			margin-left: -31px;
		}
		.shape4 {
			position: relative;
			height: 150px;
			width: 150px;
			background-color: #0074d9;
			border-radius: 80px;
			margin-top: -25px;
			float: left;
			margin-left: -32px;
		}
		.shape5 {
			position: relative;
			height: 150px;
			width: 150px;
			background-color: #0074d9;
			border-radius: 80px;
			float: left;
			margin-right: -48px;
			margin-left: -32px;
			margin-top: -30px;
		}
		.shape6 {
			position: relative;
			height: 150px;
			width: 150px;
			background-color: #0074d9;
			border-radius: 80px;
			float: left;
			margin-right: -20px;
			margin-top: -35px;
		}
		.shape7 {
			position: relative;
			height: 150px;
			width: 150px;
			background-color: #0074d9;
			border-radius: 80px;
			float: left;
			margin-right: -20px;
			margin-top: -57px;
		}
		.float {
			position: absolute;
			z-index: 2;
		}

		.form {
			margin-left: 145px;
		}

	</style>
	
</head>

<body>
	<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">
                        <form class="form" action="" method="post" name="login">
                            <div class="form-group">
                                <label for="emailusername" class="text-white">Username or Email:</label><br>
                                <input type="text" name="emailusername" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" onclick="retrun(submitlogin());" class="btn btn-info btn-md" value="Login">
                            </div>
							
							<?php if(isset($_REQUEST[ 'submit'])) { extract($_REQUEST); $login=$user->check_login($emailusername, $password); 
								if($login) { echo "<script>location='./admin.php'</script>"; } 
							else{?>

							<script type="text/javascript">
								document.getElementById("wrong_id").innerHTML = "Wrong username or password";
							</script>

							<?php } }?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--div class="container">
        <div class="jumbotron">
            <h2>Log In</h2>
            
            <hr>
            <form action="" method="post" name="login">
                <div class="form-group">
                    <label for="emailusername">Username or Email:</label>
                    <input type="text" name="emailusername" class="form-control" value="admin" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" value="1234" required>
                </div>
                <!--For showing error for wrong input  -->
                <!--p id="wrong_id" style=" color:red; font-size:12px; "></p>


                <button type="submit" name="submit" value="Login" onclick="retrun(submitlogin());" class="btn btn-lg btn-primary btn-block">Submit</button>
                
                <br>
                <p style="text-align: center; font-size: 14px;"><a href="../index.php">Back To Home</a></p>
                
                

                <?php if(isset($_REQUEST[ 'submit'])) { extract($_REQUEST); $login=$user->check_login($emailusername, $password); 
                    if($login) { echo "<script>location='../admin.php'</script>"; } 
                else{?>

                <script type="text/javascript">
                    document.getElementById("wrong_id").innerHTML = "Wrong username or password";
                </script>

                <?php } }?>

            </form>
        </div>
    </div-->

</body>

</html>