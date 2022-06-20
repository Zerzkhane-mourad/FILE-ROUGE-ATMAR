<?php
    require_once  './views/includes/sidebar.php';
    require_once './autoload.php';


    $home = new HomeController();

    $pages = ['Dashboard','Produitlis','Commandes'];

    if(isset($_GET['page'])){
        if(in_array($_GET['page'],$pages)){
            $page = $_GET['page'];
            $home->admin($page);
            }else{
                include('views/includes/error.php');
            }
        }else{

            $home->index('Dashboard');
    }    

?>



<?php

require './views/includes/footer.php';

?>