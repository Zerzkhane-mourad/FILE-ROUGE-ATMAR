let form = document.getElementById("form")
let name = document.getElementById('name');
let password = document.getElementById('password');
let Confirmpassword = document.getElementById('conpassword');
let email = document.getElementById('email');
let regemail = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
let regname=  /^[a-zA-Z0-9]+$/

form.addEventListener('submit', (event)=>{

    if(!validiteform())
        event.preventDefault();
})

function validiteform(){
let erreur = true;

    if (name.value.trim() == "") {
        document.getElementById('messagename').innerHTML ="Veuillez remplir le nom d'utilisateur";
        erreur = false;
    }else if (name.value.match(regname)){
        document.getElementById('messagename').innerHTML = "";
      }else{
        document.getElementById('messagename').innerHTML = "nom d'utilisateur invalide";
        erreur = false;
    } 
  
    if (email.value == "") {
        document.getElementById('messageemail').innerHTML = "Veuillez remplir l'e-mail";
        erreur =  false;
       
    }else if (email.value.match(regemail)){
        document.getElementById('messageemail').innerHTML = "";
      }else{
        document.getElementById('messageemail').innerHTML = "Email invalide";
        erreur = false;
    } 

    if (password.value == "") {
        document.getElementById('messagepassword').innerHTML ="Veuillez remplir le champ du mot de passe";
                erreur =  false;
      
    }else if (password.value == name.value) {
        document.getElementById('messagepassword').innerHTML ="Le mot de passe ne peut pas être votre prénom ou votre nom"
                erreur =  false;
      
    }else if ((password.value.length <=6)  ||  (password.value.length >=20)) {
        document.getElementById('messagepassword').innerHTML ="le mot de passe utilisateur doit comporter entre 6 et 20 caractères"
                erreur =  false;
      
            }else{
        document.getElementById('messagepassword').innerHTML =" "
      }


      if (Confirmpassword.value == "") {
        document.getElementById('messageconfpass').innerHTML ="Entrez Confirmer le mot de passe"
                erreur =  false;
      
    }else if (password.value!=Confirmpassword.value) {
        document.getElementById('messageconfpass').innerHTML ="Le mot de passe ne correspond pas"
                erreur =  false;

    }else{
        document.getElementById('messageconfpass').innerHTML =""
      }
    
    return erreur;
}
