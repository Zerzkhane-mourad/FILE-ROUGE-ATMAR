<?php
class ProduitController{

    public function getAllProd(){
        $produits = Produit::getAll();
        return $produits;
    }

    public function getOneProd(){
        if(isset($_POST['id'])){
            $data =array(
                'id' => $_POST['id']
            );
            $produit = Produit::getProd($data);
            return $produit;
        }
    }

    public function ajoutProd(){
        if(isset($_POST['submit'])){
            $data = array(
                'image' => $_FILES['image']['name'],
                'nom' => $_POST['nom'],
                'prix' => $_POST['prix'],
                'categuorie' => $_POST['categuorie'],
                'souscateguorie' => $_POST['souscateguorie'],
                'cooperative' => $_POST['cooperative'],
                'description' => $_POST['description'],
                'quantite' => $_POST['quantite'],
                'statut' => $_POST['statut'],
            );
            $result = Produit::ajouter($data);
            move_uploaded_file($_FILES['image']['tmp_name'],'public/image/'.$_FILES['image']['name']);
            if($result === 'ok'){
                Redirect::to('Produitlis');
            }else{
                echo $result;
            }
        }
    }

    public function modifierProd(){
        if(isset($_POST['submit'])){
            $data = array(
                'id' => $_POST['id'],
                'image' => $_POST['image'],
                'nom' => $_POST['nom'],
                'prix' => $_POST['prix'],
                'categuorie' => $_POST['categuorie'],
                'souscateguorie' => $_POST['souscateguorie'],
                'cooperative' => $_POST['cooperative'],
                'description' => $_POST['description'],
                'quantite' => $_POST['quantite'], 
                'statut' => $_POST['statut'],         
            ); 
            $result = Produit::modifier($data);
            if($result === 'ok'){
                Redirect::to('Produitlis');
            }else{
                echo $result;
            }
        }
    }

    public function supprimerProd(){
        if(isset($_POST['id'])){
            $data['id'] = $_POST['id'];
            $result = Produit::supprimer($data);
            if($result === 'ok' ){
                Redirect::to('Produitlis');
            }else{
                echo $result;
            }
        }
    }

    public function getProdcate(){
            $categuorie =$_GET['page'];
            $result = Produit::getCateguorie($categuorie);
            return $result;
    }

    public function getGout(){
        $categuorie = 'Gout de Maroc';
        $result = Produit::getCateguorie($categuorie);
        return $result;
    }


    public function getStatut(){
        $result = Produit::getStat();
        return $result;
    }
}





    

