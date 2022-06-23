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
        $messages = Message::getAll();
        return $messages;
    }
}    