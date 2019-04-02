<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="js.js"></script>
<!-- Title  -->
    <title>Sign-Up</title>
<!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
</head>
<body>
	<div class="Signup-page">
		<div class="pictureDart">
			<img src="dart.jpg">
		</div>
		<div class="Signup_Container">
			<div class="Signup_Container" style="padding-top:155px;">
				<div class="Form-Signup">
                    <?php 
                      $selector = $_GET["selector"];
                      $validator = $_GET["validator"];

                      if (empty($selector || empty($validator))) {

                          echo"could not validate your request!";
                      } else {
                        if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false ) {
                            ?>
                        
					<h1 class="Create-text">Write new Password</h1>

                            <form action="reset-password.php" method="POST" name="f2">
                                <input type="hidden" name="selector" value="<?php echo $selector ?>">
                                <input type="hidden" name="validator" value="<?php echo $validator ?>">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="Password">Password <span>*</span></label>
                                        <input type="Password" class="form-control mb-3"  value=""  name="pwd">
                                        <label for="Password">Repeat Password <span>*</span></label>
                                        <input type="Password" class="form-control"  value="" name="rpwd">
                                    </div>
                                </div>
                                <div class="signup-button">
                    <button  onclick="Signup()" name="reset" id="submit-form-button" class="btn" type="submit" style="width: 421px;" > Change Password </button>
                    
                </div>
                            </form>
				</div>
			</div>
            <?php
        }
    } 
    ?>
		<div class="Created-account">
			<p class="Already">Already have an account? <a href="http://localhost/Projet/views/Signin.php" class="Login-button">Login</a></p>
		</div>
		</div>
		
	</div>

</body>
</html>