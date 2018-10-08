<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="" type="image/x-icon" />
        <meta name="author" content="Victor Odumuyiwa">
        <meta name="keywords" content="Malaria, Survey">

        <title><?php echo PROJECT_NAME ?></title>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-social.css" rel="stylesheet">
        <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
 
    </head>
    <body>
        
        <div class="navbar navbar-default navbar-inverse navbar-fixed-top">
            <!--div class="banner"> WELCOME TO MALARIA SURVEY</div-->
			<div class="container-fluid">				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			  </div>
        </div>
        <div class="container-fluid mainbody">
            <div class="page-header">               
            </div>
			
			<?php if ($ERROR_MSG <> "") { ?>
                <div class="col-sm-12">
                	<div class="alert alert-dismissable alert-<?php echo $ERROR_TYPE ?>">
					 	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p><?php echo $ERROR_MSG; ?></p>
                 	</div>                        
				</div>
                <?php } ?>
		
    
			<div class="row">
				<div class="col-sm-2">	
				<?php include 'sidebar.php'; ?>
				</div>
				<div class="col-sm-10">

    