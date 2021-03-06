<?php
class Panier{
    static public function ajouterPan($data){
        $result = Panier::getOnPan($data);
        if($result){
            $stmt = DB::connect()->prepare('UPDATE panier SET quantite = quantite+1 '); 
            $stmt->execute();
        }else{      
            $stmt = DB::connect()->prepare("INSERT INTO panier (`image`, `id_user`, `id_produit`, `nom`, `prix` ,`quantite` ) Values (:image, :id_user, :id_produit, :nom, :prix, :quantite)");
            $stmt->bindParam(':image',$data['image']);
            $stmt->bindParam(':id_user',$data['id_user']);
            $stmt->bindParam(':id_produit',$data['id_produit']);
            $stmt->bindParam(':nom',$data['nom']);
            $stmt->bindParam(':prix',$data['prix']);
            $stmt->bindParam(':quantite',$data['quantite']);
            $stmt->execute();
        }    
    }   

    static public function getAllPan($id_user){
            $query = ("SELECT * FROM panier WHERE id_user = '$id_user'");
            $stmt =DB::connect()->prepare($query);
            $stmt->execute();   
            return $stmt->fetchAll();     
    }

    static public function getOnPan($data){
        $id_user = $data['id_user'];
        $id_produit = $data['id_produit'];
        $query = ("SELECT * FROM panier WHERE id_user = '$id_user' AND id_produit = '$id_produit'");
        $stmt =DB::connect()->prepare($query);
        $stmt->execute();   
        return $stmt->fetch();     
}
    
    static public function supprimerPan($data){
        $id_user = $data['id_user'];
        $id_produit = $data['id_produit'];
        $query = "DELETE  FROM panier WHERE id_user = '$id_user' AND id_produit = '$id_produit'";
        $stmt = DB::connect()->prepare($query);
        $stmt->execute();
        $stmt->execute();
    }

    static public function Count(){
        if(isset($_SESSION['id'])){
            $id_user = $_SESSION['id'];
            $query = "SELECT COUNT(*) as countpanier FROM panier WHERE id_user = '$id_user'";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute();
            return $stmt->fetchColumn();   
        }
    }

    static public function Calcul(){
        $id_user = $_SESSION['id'];
        $query = "SELECT nom, prix*quantite AS totale_prix FROM panier WHERE id_user='$id_user'";
        $stmt = DB::connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static public function Totale(){
        $id_user = $_SESSION['id'];
        $query = "SELECT id_user, SUM(prix*quantite)+30 AS total FROM panier WHERE id_user='$id_user' GROUP BY id_user";
        $stmt = DB::connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    
}