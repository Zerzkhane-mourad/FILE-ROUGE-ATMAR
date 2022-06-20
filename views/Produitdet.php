<?php
$exproduit = new ProduitController();
$produit = $exproduit->getOneProd();

if(isset($_POST['submit'])){
    $panier = new PanierController();
    $panier = $panier->ajoutPanier();
}  
    require  'includes/header.php';
?> 

    <div class="container  single-product my-5">
            <div class="row justify-content-center align-items-center">
              <div class="col-lg-6 col-sm-8 ">
                <img src="public/image/<?php echo $produit['image'] ?>" class="border p-3 border-dark border-2 w-100" id="ProductImg">
            </div>
  
        <div class="col-lg-4 col-sm-8">
            <h1 class="fontliv"><?php echo $produit['nom'] ?></h1>
            <p class="fonts" ><?php echo $produit['souscateguorie'] ?></p>
            <h4 class="fonts text-secondary fw-lighter fonts">Prix</h4>
            <h3  class="fonts"><?php echo $produit['prix'] ?> Dhs</h3>

            <h3 class="fonts">Product Details</h3>
            <p class="fonts" >/<?php echo $produit['description'] ?></p>
            <form method="POST">
                <input type="hidden" name="image" value="<?php echo $produit['image'] ?>" >
                <input type="hidden" name="id_user" value="<?php echo $_SESSION['id'] ?>">
                <input type="hidden" name="id_produit" value="<?php echo $produit['id'] ?>">
                <input type="hidden" name="nom" value="<?php echo $produit['nom'] ?>">
                <input type="hidden" name="prix" value="<?php echo $produit['prix'] ?>">
                <button type="submit" name="submit" class=" w-100 bg-light text-dark b  py-2 px-4 rounded-0 border-1  ms-auto fonts  border-dark ">
                <b>AJOUTER AU PANIER </b>
                </button>
            </form>
        </div>
   </div> 
</div>
<div class="container w-75 form-group">
    <label for="exampleFormControlTextarea1 " class="fonts f mb-3 fs-3 fw-bold" >votre avis est précieux</label>
    <textarea class="form-control border-dark rounded-0" id="exampleFormControlTextarea1" rows="3"></textarea>
    <button  class="mt-3 w-100 text-black bg-light b  py-2 px-4 rounded-0   ms-auto fonts  border-dark ">
        <b>COMMENTER</b> 
    </button>
</div>
<?php
require 'includes/footer.php';
?>