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
			<div class="Signup_Container" style="padding-top:190px;">
				<div class="Form-Signup">
					<h1 class="Create-text">Recover your Account</h1>

                            <form action="RequestR.php" method="POST" name="f2">
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Write your Email Address <span>*</span></label>
                                        <input type="email" class="form-control" id="email_address"  name="email">
                                    </div>
                                </div>
                                <div class="signup-button">
                    <button  onclick="Signup()" name="reset" id="submit-form-button" class="btn" type="submit" style="width: 421px;" > Send </button>
                    
                </div>
                            </form>
                            <?php
                            if (isset($_POST["reset"])) {
                                if($_GET["reset"] == "sucess"){
                                    echo'<p  > class="signupsuccess">Check your e-mail! </p>';
                                }
                        }
                        ?>
				</div>
			</div>
		<div class="Created-account">
			<p class="Already">Already have an account? <a href="http://localhost/Projet/views/Signin.php" class="Login-button">Login</a></p>
		</div>
		</div>
		
	</div>

</body>
</html>