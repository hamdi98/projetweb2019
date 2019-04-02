<?php 
include "../entities/Fidelity.php";
include "../core/Fidelityd.php";

session_start();


    function random_string($length) {
    $id = '';
    $ids = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $id .= $ids[array_rand($ids)];
    }

    return $id;
    }

    $email=$_SESSION['mail'];
    $id=random_string(10); 
    $points=0;

    
     $Fidelity1 =new Fidelity($email,$id,$points);
     $Fidelity1C =new Fidelityd($email,$id,$points);
     $Fidelity1C->ajoutercard($Fidelity1);
     header('Location: homefidele.php');
     


//*/


?>
