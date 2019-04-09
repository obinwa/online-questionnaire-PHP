<?php
require_once("config.php");

if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] != "") {
    // if logged in send to dashboard page
    redirect("new_interview.php");
}

$mode = $_REQUEST["mode"];
if ($mode == "login") {
    $email = trim($_POST['email']);
    $pass = trim($_POST['user_password']);

    if ($email == "" || $pass == "") {

        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = "Enter manadatory fields";
    } else {
        $sql = "SELECT u_surname, u_role, u_firstname, u_email FROM user WHERE u_email = :uemail AND u_password = :upass ";

        try {
            $stmt = $DB->prepare($sql);

            // bind the values
            $stmt->bindValue(":uemail", $email);
            $stmt->bindValue(":upass", $pass);

            // execute Query
            $stmt->execute();
            $results = $stmt->fetchAll();

            if (count($results) > 0) {
                $_SESSION["errorType"] = "success";
                $_SESSION["errorMsg"] = "You have successfully logged in.";

                $_SESSION["user_id"] = $results[0]["u_email"];
                $_SESSION["rolecode"] = $results[0]["u_role"];
                $_SESSION["username"] = $results[0]["u_surname"." u_firstname"];

                redirect("new_interview.php");
                exit;
            } else {
                $_SESSION["errorType"] = "info";
                $_SESSION["errorMsg"] = "username or password does not exist.";
            }
        } catch (Exception $ex) {

            $_SESSION["errorType"] = "danger";
            $_SESSION["errorMsg"] = $ex->getMessage();
        }
    }
    redirect("index.php");
}
include 'header.php';
?>
<div class="row">
	<div class="col-sm-3"></div>
    <div class="col-sm-6">
		<div class="panel panel-primary">
  		<div class="panel-heading">
            <h3 class="panel-title">LOGIN</h3>
          </div>
          <div class="panel-body">
        <form class="form-horizontal" name="contact_form" id="contact_form" method="post" action="">
            <input type="hidden" name="mode" value="login" >

            <fieldset>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="username"><span class="required"></span>Email:</label>
                    <div class="col-sm-10">
                        <input type="text" value="" placeholder="Email" id="email" class="form-control" name="email" required="" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="user_password"><span class="required"></span>Password:</label>
                    <div class="col-sm-10">
                        <input type="password" value="" placeholder="Password" id="user_password" class="form-control" name="user_password" required="" >
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">Submit</button> 
                    </div>
                </div>
                
                <div style="height: 10px;">&nbsp;</div>
                <div class="form-group">
                    
                </div>          
            </fieldset>
        </form>
			</div>
		</div>
    </div>
	<div col-sm-3></div>
</div>
<?php include 'footer.php'; ?>