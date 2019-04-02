

<!DOCTYPE HTML>
<html>
<head>
<title>Back Office</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
				  <img src="logo.jpg" height="50" width="90" >
									
								 							
							</div>
							<div class="clearfix"> </div>
						 </div>
						 
						 
						
						<div class="header-right">
		<img src="rightt.bmp" >
						</div>
				     <div class="clearfix"> </div>	
				</div>

<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
	<br><br><br><br><br>
			<form>
	<img src="../core/StatPromC.php">
	</form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<!--inner block end here-->
<!--copy rights start here-->
</div>
</div>


<!--COPY rights end here-->
<!--slider menu-->
     <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li><a href="#"><i class="fa fa-users"></i><span>Clients</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="afficherpromotion.php">Affichage</a></li>  
		          </ul>
		        </li>

		        <li><a href="#"><i class="fa fa-percent"></i><span>Promotion</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="ajouterpromotion.php">Ajout</a></li>
		            <li><a href="afficherpromotion.php">Affichage</a></li>       
					<li><a href="ajouterpublicite.php">Ajout publicité</a></li>   
					<li><a href="afficherpublicite.php">Affichage publicité</a></li> 
<li><a href="statprom.php"> Statistique</a></li>						
		          </ul>
		        </li>

		        <li><a href="#"><i class="fa fa-tag"></i><span>Produits</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="ajouter_pro.php">Ajout</a></li>	
		            <li><a href="afficher_pro.php">Affichage </a></li>	            
		          </ul>
		        </li>
				
				
				<li id="menu-academico" ><a href="#"><i class="fa fa-book"></i><span>Categories</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	<li><a href="ajouter_cat.php">Ajout</a></li>
		            <li><a href="modifier_cat.php">Modification</a></li>	
		            <li><a href="afficher_cat.php">Affichage</a>		           
		          </ul>
		        </li>
				
				<li><a href="#"><i class="fa fa-star-o"></i><span>Note</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="afficher_note.php">Affichage </a></li>	            
		          </ul>
		        </li>
				
				<li><a href="#"><i class="fa fa-file-text"></i><span>Reclamation</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>	
		            <li><a href="../../reclamation/index.php">Affichage </a></li>	            
		          </ul>
		        </li>
				
				
				<li><a href="#"><i class="fa fa-motorcycle"></i><span>Livraison</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="afficherlivraison.php">Affichage Livraison </a></li>	
					<li><a href="ajouterlivreur.php">Ajout Livreur</a></li>	
		            <li><a href="afficherlivreur.php">Affichage Livreur </a></li>	 					
		          </ul>
		        </li>
				
				
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->

		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     