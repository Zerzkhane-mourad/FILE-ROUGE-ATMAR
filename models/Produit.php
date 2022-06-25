<?php 
class Produit{
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM produits');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static public function ajouter($data){
        $stmt = DB::connect()->prepare('INSERT INTO produits (`image`, `nom`, `prix`, `categuorie`, `souscateguorie`, `cooperative`, `description`, `quantite`, `statut`) Values (:image, :nom, :prix, :categuorie, :souscateguorie, :cooperative, :description, :quantite, :statut)');
        $stmt->bindParam(':image',$data['image']);
        $stmt->bindParam(':nom',$data['nom']);
        $stmt->bindParam(':prix',$data['prix']);
        $stmt->bindParam(':categuorie',$data['categuorie']);
        $stmt->bindParam(':souscateguorie',$data['souscateguorie']);
        $stmt->bindParam(':cooperative',$data['cooperative']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':quantite',$data['quantite']);
        $stmt->bindParam(':statut',$data['statut']);
        $stmt->execute();
    }

    static public function modifier($data){
        $stmt = DB::connect()->prepare('UPDATE produits SET image = :image, nom = :nom, prix = :prix, categuorie = :categuorie ,souscateguorie = :souscateguorie ,cooperative = :cooperative ,description = 
        :description ,quantite= :quantite, statut= :statut WHERE id= :id '); 
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':image',$data['image']);
        $stmt->bindParam(':nom',$data['nom']);
        $stmt->bindParam(':prix',$data['prix']);
        $stmt->bindParam(':categuorie',$data['categuorie']);
        $stmt->bindParam(':souscateguorie',$data['souscateguorie']);
        $stmt->bindParam(':cooperative',$data['cooperative']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':quantite',$data['quantite']);
        $stmt->bindParam(':statut',$data['statut']);
        $stmt->execute();
    }

    static public function supprimer($data){
        $id = $data['id'];
        $query = 'DELETE  FROM produits WHERE id=:id';
        $stmt = DB::connect()->prepare($query);
        $stmt->execute(array(":id" => $id));
        $stmt->execute();
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

    static function getStat(){
        $query = ("SELECT * FROM produits WHERE statut = 'topvente' ");
        $stmt =DB::connect()->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();     
    }

    static public function CountProduit(){
        if(isset($_SESSION['id']) && $_SESSION['role']=='admin'){   
            $query = "SELECT COUNT(*) as countproduit FROM produits ";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute();
            return $stmt->fetchColumn();

        }else{
            Redirect::to('Login');
        }

    
    }


}        