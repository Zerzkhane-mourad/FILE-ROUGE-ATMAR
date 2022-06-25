<?php 

class User{
    static public function creeUser($data){
        $stmt = DB::connect()->prepare('INSERT INTO users (nom,email,password,role) VALUES (:nom, :email, :password, :role)');
        $stmt->bindParam(':nom',$data['nom']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':password',$data['password']);
        $stmt->bindParam(':role',$data['role']);
        $stmt->execute();
    }

    static public function login($data){
        $email = $data['email'];
            $query = 'SELECT * FROM users WHERE email=:email';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email" => $email));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        
    }
    
    static public function CountClient(){
        if($_SESSION['role'] == 'admin'){
            if(isset($_SESSION['id'])){
                $id_user = $_SESSION['id'];
                $query = "SELECT COUNT(*) as countclient FROM users WHERE role =  'client' ";
                $stmt = DB::connect()->prepare($query);
                $stmt->execute();
                return $stmt->fetchColumn();
            }
        }else{
            Redirect::to('Home');
        }
    }

}    