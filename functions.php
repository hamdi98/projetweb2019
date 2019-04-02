<?php 
function logged_in()
{
	if($_SESSION['mail']=='')
	{
		return true;
	}
	else {
		return false;
	}
}


 ?>