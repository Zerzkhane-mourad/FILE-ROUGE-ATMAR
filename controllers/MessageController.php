<?php 
class MessageController{

    public function EnvoyerMessage(){
        if(isset($_POST['submit'])){
            $data = array(
                'nom' => $_POST['nom'],
                'email' => $_POST['email'],
                'objet' => $_POST['objet'],
                'message' => $_POST['message'],
            );
            $result = Message::Envoyer($data);
        }
    }

    public function getAllMessage(){
        if(isset($_SESSION['id']) && $_SESSION['role']=='admin'){   
            $messages = Message::getAll();
            return $messages;
        }else{
            Redirect::to('Home');
        }    
    }
}    