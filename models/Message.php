<?php 
class Message{

    static public function Envoyer($data){
        $stmt = DB::connect()->prepare('INSERT INTO messages (`nom`, `email`, `objet`, `message`) Values (:nom, :email, :objet, :message)');
        $stmt->bindParam(':nom',$data['nom']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':objet',$data['objet']);
        $stmt->bindParam(':message',$data['message']);
        $stmt->execute();
    }

    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM messages');
        $stmt->execute();
        return $stmt->fetchAll();
    }


}