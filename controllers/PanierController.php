<?php
class PanierController{
    public function ajoutPanier(){
        if(isset($_POST['submit'])){
            $data = array(
                'image' => $_POST['image'],
                'id_user' => $_POST['id_user'],
                'id_produit' => $_POST['id_produit'],    
                'nom' => $_POST['nom'],
                'prix' => $_POST['prix'],
                'quantite' => '1',
            );
            $result = Panier::ajouterPan($data);
            Redirect::to('Home');
        }
    }
    public function getAllPanier(){
        if(isset($_SESSION['id'])){
            $id_user =$_SESSION['id'];
            $paniers = Panier::getAllPan($id_user);
            return $paniers;
        } 
    }
    
    public function getOnPanier(){
        if(isset($_POST['id_user'])){
            $data['id_produit'] = $_POST['id_produit'];          
            $data['id_user'] = $_POST['id_user'];
            $result = Panier::getOnPan($data);
            if($result === 'ok' ){
                Redirect::to('Panier');
            }else{
                echo $result;
            }
        }
    }

    public function supprimerPanier(){
        if(isset($_POST['id_user'])){
            $data['id_produit'] = $_POST['id_produit'];
            $data['id_user'] = $_POST['id_user'];
            $result = Panier::supprimerPan($data);
            if($result === 'ok' ){
                Redirect::to('Panier');
            }else{
                echo $result;
            }
        }
    }
 
}