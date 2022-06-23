<?php
class CommandeController{

    public function ajoutercommande(){
        
        if(isset($_POST['commander'])){ 
            $data = array(
                'id_client' => $_POST['id_client'],
                'nom_complet' => $_POST['nom_complet'],
                'cin' => $_POST['cin'],
                'adresse' => $_POST['adresse'],
                'ville' => $_POST['ville'],
                'code_postale' => $_POST['code_postale'],
                'telephone' => $_POST['telephone'],
            );    
            $result = Commande::ajoutComm($data);
            if($result === 'ok'){
                Redirect::to('Home');
            }else{
                echo $result;
            }
        }
        
    }

    public function getAllCommande(){
        $commandes = Commande::getAllComm();
        return $commandes;
    }

}