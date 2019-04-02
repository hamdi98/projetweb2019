<?php 

if (isset($_POST["reset"])) {

	$selector = bin2hex(random_bytes(8));
	$token = random_bytes(32);


	$url = "http://localhost/Projet/views/Recover.php?selector=" . $selector . "&validator=" . bin2hex($token); 

	$expires= date("U") + 1800;

	require 'db.php';

	$useremail =  $_POST["email"];

	$sql = "DELETE FROM pwdReset WHERE pwdResetemail=?";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		
		echo"There was an error";
		exit();
	} else {
		mysqli_stmt_bind_param($stmt, "s", $useremail);
		mysqli_stmt_execute($stmt);
	}

	$sql = "INSERT INTO pwdReset (pwdResetemail,pwdResetselector,pwdResettoken,pwdResetexpires) VALUES (?,?,?,?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		
		echo"There was an error";
		exit();
	} else {
		$hashedToken= password_hash($token, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt, "ssss", $useremail,$selector,$hashedToken,$expires);
		mysqli_stmt_execute($stmt);
	}

	mysqli_stmt_close($stmt);
	//mysqli_close();

$message= '<p> We recieved a password request , the link is below </p>';
	$message.= '<p>Here is Your password reset link :  </br>';
	$message.='<a href="'. $url .'">'. $url .'</a></p> ';

	require("../PHPMailer-master/src/PHPMailer.php");
  require("../PHPMailer-master/src/SMTP.php");
  require("../PHPMailer-master/src/Exception.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP;
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->isHTML(true);
    $mail->Username = "cbreakers321@gmail.com";
    $mail->Password = "codebreaker";
    $mail->setFrom("cbreakers321@gmail.com");
    $mail->Subject = "Test";
    $mail->Body = $message;
    $mail->AddAddress("mohannad.khadhraoui@esprit.tn");

     if(!$mail->send()) {
        //echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
       // header("Location : recover.php?reset=success");
     }

	

	//header("Location : http://localhost/Projet/views/Recover.php?reset=success");


}
else {
	header("Location : home.php");
}


 ?>