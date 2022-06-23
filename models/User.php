<?php 

class User{
    static public function creeUser($data){
        $stmt = DB::connect()->prepare('INSERT INTO users (nom,email,password,role) VALUES (:nom, :email, :password, :role)');
        $stmt->bindParam(':nom',$data['nom']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':password',$data['password']);
        $stmt->bindParam(':role',$data['role']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }

    static public function login($data){
        $email = $data['email'];
        try {
            $query = 'SELECT * FROM users WHERE email=:email';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email" => $email));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
            if($stmt->execute()){
                return 'ok';
            }
        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }
    
    static public function CountClient(){
        
        if(isset($_SESSION['id'])){
            $id_user = $_SESSION['id'];
            $query = "SELECT COUNT(*) as countclient FROM users WHERE role =  'client' ";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute();
            return $stmt->fetchColumn();
        }
    }
}