<?php
class Panier{
    static public function ajouterPan($data){
        $result = Panier::getOnPan($data);
        if($result){
            $stmt = DB::connect()->prepare('UPDATE panier SET quantite = quantite+1 '); 
            $stmt->execute();
        }else{      
            $stmt = DB::connect()->prepare('INSERT INTO panier (`image`, `id_user`, `id_produit`, `nom`, `prix` ,`quantite`) Values (:image, :id_user, :id_produit, :nom, :prix, :quantite)');
            $stmt->bindParam(':image',$data['image']);
            $stmt->bindParam(':id_user',$data['id_user']);
            $stmt->bindParam(':id_produit',$data['id_produit']);
            $stmt->bindParam(':nom',$data['nom']);
            $stmt->bindParam(':prix',$data['prix']);
            $stmt->bindParam(':quantite',$data['quantite']);
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            $stmt->close();
            $stmt = null;
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
        try {
            $query = "DELETE  FROM panier WHERE id_user = '$id_user' AND id_produit = '$id_produit'";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute();
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function Count(){


    }

}