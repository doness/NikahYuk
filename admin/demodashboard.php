<?php session_start(); include_once 'include/class.user.php'; $user=new User(); ?>

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
	
	
</head>

<body>

<div class="container">
<section>
    <div class="row">
		<div class="col-md-12">
			<p>I needed dashboard buttons for a project without having to make lots of different images to use as buttons, as the new CMS was going to be bootstrap based i decided to make them with glyphicons in custom sized buttons.</p>
        </div>
    </div>
	<div class="row">
		<div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-thumbs-up"></span> Admin Dashboard Buttons</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
						<div class="col-md-12">
                          <!-- grey -->
                          <a href="#" class="btn btn-grey btn-lg" role="button"><span class="glyphicon glyphicon-cog glyphsize red"></span> <br />Example<br />Button <span class="glyphicon glyphicon-cog black"></span></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- dblue -->
                          <a href="#" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />Add <span class="glyphicon glyphicon-plus green"></span><br />Customer</a>
                          <a href="#" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />edit <span class="glyphicon glyphicon-edit yellow"></span><br />Customer</a>
                          <a href="#" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />Delete <span class="glyphicon glyphicon-minus red"></span><br />Customer</a>
                          <a href="#" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />Customer<br />Marketing <span class="glyphicon glyphicon-envelope"></span></a>
                          <a href="#" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />Customer<br />Reporting <span class="glyphicon glyphicon-signal"></span></a>
                          <a href="#" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />Customer<br />Database <span class="glyphicon glyphicon-book"></span></a>
                          <a href="#" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />Customer<br />Export - CSV <span class="glyphicon glyphicon-export"></span></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- dred -->
                          <a href="#" class="btn btn-dred btn-lg" role="button"><span class="glyphicon glyphicon-calendar glyphsize"></span> <br/>Add <span class="glyphicon glyphicon-plus green"></span><br /> Appointment</a>
                          <a href="#" class="btn btn-dred btn-lg" role="button"><span class="glyphicon glyphicon-calendar glyphsize"></span> <br />Edit <span class="glyphicon glyphicon-edit yellow"></span><br />Appointment</a>
                          <a href="#" class="btn btn-dred btn-lg" role="button"><span class="glyphicon glyphicon-calendar glyphsize"></span> <br/>Delete <span class="glyphicon glyphicon-minus red"></span><br /> Appointment</a>
                          <a href="#" class="btn btn-dred btn-lg" role="button"><span class="glyphicon glyphicon-calendar glyphsize"></span> <br/>View <span class="glyphicon glyphicon-eye-open"></span><br />Diary</a>
                          <a href="#" class="btn btn-dred btn-lg" role="button"><span class="glyphicon glyphicon-calendar glyphsize"></span> <br/>Manage <br /> Diary</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- dgreen -->
                          <a href="#" class="btn btn-dgreen btn-lg" role="button"><span class="glyphicon glyphicon-signal glyphsize green"></span> <br/>Business<br />Reports </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- mred -->
                          <a href="#" class="btn btn-mred btn-lg" role="button"><span class="glyphicon glyphicon-envelope glyphsize"></span> <br/>Postage<br />Manager</a>
                          <a href="#" class="btn btn-mred btn-lg" role="button"><span class="glyphicon glyphicon-home glyphsize"></span> <br/>Postcode<br />Setup</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- orange -->
                          <a href="#" class="btn btn-orange btn-lg" role="button"><span class="glyphicon glyphicon-bullhorn glyphsize"></span> <br/>Announcement<br />Manager</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- lblue -->
                          <a href="#" class="btn btn-lblue btn-lg" role="button"><span class="glyphicon glyphicon-list glyphsize blue"></span> <br /><span class="blue">Category<br />Manager</span></a>
                          <a href="#" class="btn btn-lblue btn-lg" role="button"><span class="glyphicon glyphicon-list-alt glyphsize blue"></span> <br/><span class="blue">SubCategory<br />Manager</span></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- burnt -->
                          <a href="#" class="btn btn-burnt btn-lg" role="button"><span class="glyphicon glyphicon-tint glyphsize yellow"></span> <br/>Colour<br />Manager</a>
                          <a href="#" class="btn btn-burnt btn-lg" role="button"><span class="glyphicon glyphicon-cog glyphsize yellow"></span> <br/>Swatch<br />Setup</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- green -->
                          <a href="#" class="btn btn-green btn-lg" role="button"><span class="glyphicon glyphicon-dashboard glyphsize dgreen"></span> <br /><br />Dashboard</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- lime -->
                          <a href="#" class="btn btn-lime btn-lg" role="button"><span class="glyphicon glyphicon-globe glyphsize dgreen"></span> <span class="dgreen"><br />Website<br />Manager</span></a>
                          <a href="#" class="btn btn-lime btn-lg" role="button"><span class="glyphicon glyphicon-cog glyphsize dgreen"></span> <span class="dgreen"><br />SEO<br />Setup</span></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- mokka -->
                          <a href="#" class="btn btn-mokka btn-lg" role="button"><span class="glyphicon glyphicon-triangle-right glyphsize green"></span><span class="glyphicon glyphicon-home glyphsize choc"></span> <br />Delivery<br />Setup</a>
                          <a href="#" class="btn btn-mokka btn-lg" role="button"><span class="glyphicon glyphicon-tasks glyphsize choc"></span> <br />Departments<br />Setup</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- dpurple -->
                          <a href="#" class="btn btn-dpurple btn-lg" role="button"><span class="glyphicon glyphicon-gbp glyphsize lilac"></span> <br/>Payments<br />Manager</a>
                          <a href="#" class="btn btn-dpurple btn-lg" role="button"><span class="glyphicon glyphicon-piggy-bank glyphsize mblue"></span> <br/>Paypal<br />System</a>
                          <a href="#" class="btn btn-dpurple btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br/>Insurance<br />Claims</a>
                          <a href="#" class="btn btn-dpurple btn-lg" role="button"><span class="glyphicon glyphicon-check glyphsize green"></span> <br/>Invoices<br />Paid</a>
                          <a href="#" class="btn btn-dpurple btn-lg" role="button"><span class="glyphicon glyphicon-remove glyphsize red"></span> <br/>Invoices<br />Canceled</a>
                          <a href="#" class="btn btn-dpurple btn-lg" role="button"><span class="glyphicon glyphicon-saved glyphsize lilac"></span> <br/>Invoices<br />Archived</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- purple -->
                          <a href="#" class="btn btn-purple btn-lg" role="button"><span class="glyphicon glyphicon-shopping-cart glyphsize black"></span> <br/>Shopping<br />Cart</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- lilac -->
                          <a href="#" class="btn btn-lilac btn-lg" role="button"><span class="glyphicon glyphicon-file glyphsize purple"></span> <br/>Product<br />Manager</a>
                          <a href="#" class="btn btn-lilac btn-lg" role="button"><span class="glyphicon glyphicon-text-width glyphsize"></span> <br/>Product<br />Sizes</a>
                          <a href="#" class="btn btn-lilac btn-lg" role="button"><span class="glyphicon glyphicon-text-width glyphsize purple"></span> <br/>Sizes<br />Manager</a>
                          <a href="#" class="btn btn-lilac btn-lg" role="button"><span class="glyphicon glyphicon-th-large glyphsize"></span> <br/>Stock<br />Manager</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- yellow -->
                          <a href="#" class="btn btn-yellow btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize orange"></span> <br/><span class="orange">User<br />Setup</span></a>
                          <a href="#" class="btn btn-yellow btn-lg" role="button"><span class="glyphicon glyphicon-question-sign glyphsize orange"></span> <br/><span class="orange">Vaccination<br />Manager</span></a>
                
                        </div>
                    </div>

                </div>
                <div class="panel-footer">
                	<div class="pull-left">Author: Dennis Pattison</div>
					<div class="pull-right"><a href="http://www.dinara.co.uk" target="_blank">Dinara Design</a></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

</body>

</html>