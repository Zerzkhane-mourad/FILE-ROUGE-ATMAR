<?php
    $exproduit = new ProduitController();
    $produit = $exproduit->getOneProd();

if(isset($_POST['submit'])){
    $updateProduit = new ProduitController();
    $updateProduit->modifierProd();
} 
require  'includes/headersid.php';
?>

    <section class="h-100 my-3 mb-5">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center  my-4  fonts">
                        <h3>Modifier un produit</h3>
					</div>
					<div class="card shadow-lg border-0">
						<div class="card-body px-5 py-3">       
                            <form method="POST">
                                <div class="mb-1 font-weight-bold pt-2">
                                    <label class="mb-1 fonts font-weight-bold" for="email"><b>image</b></label>
                                    <input type="file" class="form-control rounded-0 border-dark" name="image" value="<?php echo $produit['image']; ?>"  required >
                                </div>
                                <div class="mb-1">
                                    <div class="mb-1 w-100">
                                        <label class="fonts" for="email"><b>Nom de produit</b></label>
                                    </div>
                                    <input  type="text" class="form-control rounded-0 border-dark" name="nom"  value="<?php echo $produit['nom']; ?>"  required>
                                </div>
                                <div class="mb-1">
                                    <div class="mb-1 w-100">
                                        <label class="fonts" ><b>Prix</b></label>
                                    </div>
                                    <input  type="text" class="form-control rounded-0 border-dark" name="prix" value="<?php echo $produit['prix']; ?>" required>
                                </div>
                                <div class="mb-1">
                                    <div class="mb-1 w-100">
                                        <label class="fonts" ><b>Catéguorie</b></label>
                                    </div>
                                    <input  type="text" class="form-control rounded-0 border-dark" name="categuorie" value="<?php echo $produit['categuorie']; ?>" required>
                                </div>
                                <div class="mb-1">
                                    <div class="mb-1 w-100">
                                        <label class="fonts" ><b>Sous-Catéguorie</b></label>
                                    </div>
                                    <input  type="text" class="form-control rounded-0 border-dark" name="souscateguorie" value="<?php echo $produit['souscateguorie']; ?>" required>
                                </div>
                                <div class="mb-1">
                                    <div class="mb-1 w-100">
                                        <label class="fonts" ><b>Coopérative</b></label>
                                    </div>
                                    <input  type="text" class="form-control rounded-0 border-dark" name="cooperative" value="<?php echo $produit['cooperative']; ?>" required>
                                </div>
                                <div class="mb-1">
                                    <div class="mb-1 w-100">
                                        <label class="fonts" ><b>Déscription</b></label>
                                    </div>
                                    <textarea class="form-control border-dark rounded-0" id="exampleFormControlTextarea1" name="description" rows="3" ><?php echo $produit['description']; ?></textarea>
                                </div>
                                <div class="mb-2">
                                    <div class="mb-1 w-100">
                                        <label class="fonts" ><b>Quantité</b></label>
                                    </div>
                                    <input  type="text" class="form-control rounded-0 border-dark" name="quantite" value="<?php echo $produit['quantite']; ?>"  required>
                                </div>
                                <div class="mb-2">
                                    <div class="mb-1 w-100">
                                        <label class="fonts" ><b>Statut</b></label>
                                    </div>
                                    <input  type="text" class="form-control rounded-0 border-dark" name="statut" value="<?php echo $produit['statut']; ?>"  required>
                                </div>
                                <input  type="hidden" name="id" class="form-control rounded-0 border-dark" name="quantite" value="<?php echo $produit['id']; ?>"  required>
                                <div class="d-flex align-items-center fonts pb-3">
                                    <button type="submit"  name="submit" class=" w-100 bgh text-dark b  py-2 px-4 rounded-0   ms-auto fonts  border-0 ">
                                        <b>Modifier le Produit</b> 
                                    </button>
                                </div>
                            </form>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
<script src="public/js/jquery.min.js"></script>
<script src="public/js/popper.js"></script>
<script src="public/js/main.js"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>    