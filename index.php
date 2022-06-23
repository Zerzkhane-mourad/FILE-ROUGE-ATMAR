<?php

    require_once './autoload.php';


    $home = new HomeController();

    $pages = ['Home','Contact','Femme','Gourmet','Homme','Login','Panier','Produitdet','Signup','Dashboard','Produitlis','Commande','Updatepro','logout','Message'];

    if(isset($_GET['page'])){
        if(in_array($_GET['page'],$pages)){
            $page = $_GET['page'];
            $home->index($page);
            }else{
                include('views/includes/error.php');
            }
        }else{

            $home->index('Home');
    }    

?>

