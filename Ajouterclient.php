<?php 
include "../entities/Client.php";
include "../core/Clientd.php";
session_start();

$host="localhost";
$user="root";
$password="";
$db="project";
 
$con = mysqli_connect($host,$user,$password,$db);

if (isset($_POST['namee']) and isset($_POST['lname']) and isset($_POST['pwd']) and isset($_POST['rpwd']) and isset($_POST['email']) and isset ($_POST['country']) ) 
{
	$namee=$_POST['namee'];
    $lname=$_POST['lname'];
	$pwd=$_POST['pwd'];
    $rpwd=$_POST['rpwd'];
    $email=$_POST['email'];
    $country=$_POST['country'];

    if(empty($namee) || empty($lname) || empty($pwd) || empty($rpwd) || empty($email) || empty($country) )
    {
    	header('Location: Signup.php');
		exit();
    }

    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
    	header('Location: Signup.php');
		exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $namee) && !preg_match("/^[a-zA-Z0-9]*$/", $lname))
    {
    	header('Location: Signup.php?error=invalidnameorlastname');
		exit();
    }

	else if( $pwd != $rpwd )
	{
		header('Location: Signup.php');
		exit();
	}
    else {
        $sql = "SELECT email FROM client WHERE email='".$email."' ";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $sql)) {

            header('Location: Signup.php?error=sqlerror');
        exit();
        } 
        else 
        {
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if ($resultcheck > 0) {
                header('Location: Signup.php?error=emailalreadytaken');
                exit();
                
            }

        }


    }
	
     $client1=new Client($_POST['namee'],$_POST['lname'],$_POST['pwd'],$_POST['rpwd'],$_POST['email'],$_POST['country']);
     $client1C=new Clientd();
     $client1C->ajouterclient($client1);
     $_SESSION['mail']=$email;
     header('Location: clienthome.php');
	
}
else
{
	echo "vérifier les champs";
}
//*/


?>