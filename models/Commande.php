<?php 
class Commande{
    static public function ajoutComm($data){
        $id_user =$_SESSION['id'];
        $stm = DB::connect()->prepare("INSERT INTO commande (id_user, id_produit, image, nom_produit, prix, quantite) SELECT id_user, id_produit, image, nom, prix, quantite FROM panier WHERE id_user = '$id_user'");
        $stm->execute();
        $stmt = DB::connect()->prepare('INSERT INTO detlivraison (`id_user`, `nom_complet`, `cin`, `adresse`, `ville`, `code_postale`, `telephone`) Values (:id_client, :nom_complet, :cin, :adresse, :ville, :code_postale, :telephone)');
        $stmt->bindParam(':id_client',$data['id_client']);
        $stmt->bindParam(':nom_complet',$data['nom_complet']);
        $stmt->bindParam(':cin',$data['cin']);
        $stmt->bindParam(':adresse',$data['adresse']);
        $stmt->bindParam(':ville',$data['ville']);
        $stmt->bindParam(':code_postale',$data['code_postale']);
        $stmt->bindParam(':telephone',$data['telephone']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
    }

    static public function getAllComm(){
        $stmt = DB::connect()->prepare('SELECT * FROM commande INNER JOIN detlivraison on commande.id_user = detlivraison.id_user');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
    
}