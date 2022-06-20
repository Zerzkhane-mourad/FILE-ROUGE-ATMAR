<?php 
class Produit{
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM produits');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function ajouter($data){
        $stmt = DB::connect()->prepare('INSERT INTO produits (`image`, `nom`, `prix`, `categuorie`, `souscateguorie`, `cooperative`, `description`, `quantite`) Values (:image, :nom, :prix, :categuorie, :souscateguorie, :cooperative, :description, :quantite)');
        $stmt->bindParam(':image',$data['image']);
        $stmt->bindParam(':nom',$data['nom']);
        $stmt->bindParam(':prix',$data['prix']);
        $stmt->bindParam(':categuorie',$data['categuorie']);
        $stmt->bindParam(':souscateguorie',$data['souscateguorie']);
        $stmt->bindParam(':cooperative',$data['cooperative']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':quantite',$data['quantite']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }

    static public function modifier($data){
        $stmt = DB::connect()->prepare('UPDATE produits SET image = :image, nom = :nom, prix = :prix, categuorie = :categuorie ,souscateguorie = :souscateguorie ,cooperative = :cooperative ,description = 
        :description ,quantite= :quantite WHERE id= :id '); 
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':image',$data['image']);
        $stmt->bindParam(':nom',$data['nom']);
        $stmt->bindParam(':prix',$data['prix']);
        $stmt->bindParam(':categuorie',$data['categuorie']);
        $stmt->bindParam(':souscateguorie',$data['souscateguorie']);
        $stmt->bindParam(':cooperative',$data['cooperative']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':quantite',$data['quantite']);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }

    static public function supprimer($data){
        $id = $data['id'];
        try {
            $query = 'DELETE  FROM produits WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }

    static function getProd($data){
        $id = $data['id'];
            $query = 'SELECT * FROM produits WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $prod = $stmt->fetch(PDO::FETCH_ASSOC);
            return $prod;
        
    }

    static function getCateguorie($categuorie){
            $query = ("SELECT * FROM produits WHERE categuorie = '$categuorie'");
            $stmt =DB::connect()->prepare($query);
            $stmt->execute();   
            return $stmt->fetchAll();     
    }

}        