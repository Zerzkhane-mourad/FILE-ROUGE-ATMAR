<?php
if(isset($_SESSION['id'])){
  $user = $_SESSION['nom'];
}else{
  $user= '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/css/style.css">
    <title>Admin</title>
</head>
<body>
    <nav class="navbar  navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
          <a class="navbar-brand" href="Home"><img class="logo" src="public/image/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navb  navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  me-auto mb-2 mb-lg-0 ms-lg-5">
              <li class="nav-item">
                <a class="nav-link"  href="Home">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Femme">Femme</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Homme">Homme</a>
              </li>                
              <li class="nav-item">
                <a class="nav-link" href="Cosmetique">Cosmétiques</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Gourmet">Gourmet</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" Contact" >Contactez-Nous</a>
              </li>
            </ul>
            <div class="d-flex align-items-baseline">
              <div>
                <p><?php echo $user  ?></p>
              </div>
              <div class="dropdown">
                <button href="Login " class="btn border-0 dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="text-black me-2 fas fa-user"></i></button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="Login">Connecter</a></li>
                    <li><a class="dropdown-item" href="logout">Deconnection</a></li>
                  </ul>
              </div>   
              <div>
              <a href="Panier" class="position-relative">
                <i  class="text-black fa-solid fa-cart-shopping"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    2
                </span>
                </a>
              </div>
            </div>
          </div>
        </div>
    </nav>