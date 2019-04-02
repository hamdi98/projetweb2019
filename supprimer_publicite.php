<?PHP
include '../classes.php';
$var=new publiciteC();
if (isset($_GET["dl"]))
{
	$id=$_GET["dl"];
	$var->supprimerPublicite($id);
    header('Location: afficherpublicite.php');
}

?>