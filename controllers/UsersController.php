<?php

class UsersController{
    public function inscription(){
        if(isset($_POST['submit'])){
            $data = array(
                'nom' => $_POST['nom'],
                'email' => $_POST['email'],
                'password' =>$_POST['password'],
                'role' => 'client'
            );
            $result = User::creeUser($data);
            if($result === 'ok'){
               Redirect::to('Login');
            }else{
                echo $result;
            }
        }
    }

    public function authtifi(){ 
        if(isset($_POST['submit'])){
            $data = array(
                'email'=>$_POST['email'],
                'password'=>$_POST['password'],
                'role' => 'client'
            );
            $data['email'] = $_POST['email'];
            $result = User::login($data);
            if($result->email === $_POST['email'] && $result->password === $_POST['password']){
                $_SESSION['nom'] =$result->nom;
                $_SESSION['id'] = $result->id;

                if ($result->role === 'admin') {
                    $_SESSION['role'] = 'admin';
                    Redirect::to('Dashboard');
                }else{
                    $_SESSION['role'] = 'client';
                    Redirect::to('Home');
                }
            }else{
 
                Redirect::to('Login');
            }
        }
    }
    public function logout(){
            session_start(); 
            session_destroy();
            Redirect::to('Home');       
    } 

    
}    

