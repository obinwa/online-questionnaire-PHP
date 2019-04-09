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
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="bootstrap/css/font-awesome.css" rel="stylesheet">
		<link href="bootstrap/css/social-button.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
		
 
    </head>
    <body>
        
        <div class="navbar navbar-default navbar-inverse navbar-fixed-top">
            <div class="banner"> WELCOME TO MALARIA SURVEY</div>
        </div>
        <div class="container mainbody">
            <div class="page-header">
            </div>
            <div class="container-fluid">

                <?php if ($ERROR_MSG <> "") { ?>
                    <div class="col-sm-12">
                        <div class="alert alert-dismissable alert-<?php echo $ERROR_TYPE ?>">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <p><?php echo $ERROR_MSG; ?></p>
                        </div>                        
                    </div>
                <?php } ?>