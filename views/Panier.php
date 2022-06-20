<?php
$data = new PanierController();
$paniers = $data->getAllPanier();
$Panier = new PanierController();
$Panier->supprimerPanier();
?>
<?php
if(empty($_SESSION['id'])){
    Redirect::to('Dashboard'); 
}else{
require  'includes/header.php';
?>
    <div class="d-flex justify-content-between px-5  mt-4 align-items-baseline pt-4 pb-3 rounded-2 bgh">
        <div class="fontliv ps-4">
          <h5>LIVRAISON GRATUITE</h5>
        </div>
        <div class="pe-5 me-3">
          <p class="fonts">Sur toutes les commandes à  1000 Dhs</p>
        </div>
    </div> 
    <div class="container py-5">
        <div class="d-flex row">
            <div class="col border-end border-2">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                    <tr>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Sous-Totale</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($paniers as $panier): ?>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img
                                    src="public/image/<?php echo $panier['image'] ?>"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    class="rounded-circle"
                                    />
                                <div class="ms-3">
                                <p class="fw-bold mb-1"><?php echo $panier['nom'] ?></p>
                                <p class="text-muted mb-0"><?php echo $panier['prix'] ?>Dhs</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="quantity">
                                <input class="text-center py-1 rounded-0 ps-3 border-0" type="number" min="1" max="9" step="1" value="<?php echo $panier['quantite']  ?>">
                            </div>
                        </td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="id_produit" value="<?php echo $panier['id_produit']; ?>">
                                <input type="hidden" name="id_user" value="<?php echo $_SESSION['id']; ?>">
                                <button type="submit" name="delete"   class="btn btn-link btn-sm btn-rounded ps-4">
                                    <i class="fa-solid text-secondary fa-trash-can" style="font-size: 1.4rem;"></i>
                                </button>
                            </form>
                        </td>
                    </tr>       
                    <?php endforeach ?> 
                    </tbody>
                </table> 
                <div class="border border-dark fonts py-3 px-3">
                    <h5 class="fw-bolder">Votre Commande</h5>
                    <div class="d-flex justify-content-between fs-5 fw-bold">
                        <div class="">
                            <p>Produit</p>
                        </div>
                        <div>
                            <p>Sous-Total</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between ">
                        <div>
                            <p>Amlou Beldi</p>
                        </div>
                        <div>
                            <p>120 Dhs</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between ">
                        <div>
                            <p>livraison</p>
                        </div>
                        <div>
                            <p>30 Dhs</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between ">
                        <div>
                            <p>Totale</p>
                        </div>
                        <div>
                            <p>200 Dhs</p>
                        </div>
                    </div>

                </div>   
            </div>
            <div class="col">
                <div class="fonts  ">
                    <h4 class="fw-bolder">Détails de facturation</h4>
                </div>
                <form class="needs-validation" novalidate="" autocomplete="off">
                    <div class="row mb-2">
                        <div class="col">
                        <div class="form-outline">
                            <label class="mb-2 fonts font-weight-bold" for="email"><b>Prénom Nom</b></label>
                            <input type="text" id="form7Example1" class="form-control rounded-0 border-dark" />
                        </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="mb-2 fonts font-weight-bold" for="email"><b>CIN</b></label>
                                <input type="text" id="form7Example1" class="form-control rounded-0 border-dark" />
                            </div>
                        </div>
                    </div>
                    <div class="font-weight-bold mb-2">
                        <label class="mb-2 fonts font-weight-bold" for="email"><b>Adresse</b></label>
                        <input id="email" type="email" class="form-control rounded-0 border-dark" name="email" value="" required autofocus>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                        <div class="form-outline">
                            <label class="mb-2 fonts font-weight-bold" for="email"><b>Ville</b></label>
                            <input type="text" id="form7Example1" class="form-control rounded-0 border-dark" />
                        </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="mb-2 fonts font-weight-bold" for="email"><b>Code postale</b></label>
                                <input type="text" id="form7Example1" class="form-control rounded-0 border-dark" />
                            </div>
                        </div>
                    </div>
                    <div class="font-weight-bold mb-2">
                        <label class="mb-2 fonts font-weight-bold" for="email"><b>Téléphone</b></label>
                        <input id="email" type="email" class="form-control rounded-0 border-dark" name="email" value="" required autofocus>
                    </div>
                    <div class="d-flex align-items-center fonts">
                        <button type="button" class=" w-100 bg-black text-light b  py-2 px-4 rounded-0   ms-auto fonts  border-0 ">
                            <b>Commander</b> 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
require 'includes/footer.php';
?>
<?php  } ?>  
  