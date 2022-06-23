<?php
$data = new ProduitController();
$produits = $data->getProdcate();

?>
<?php
require  'includes/header.php';
?> 
      <div class="container bg-white">
          <div class="bg-white d-flex flex-wrap ">
          <?php foreach ($produits as $produit) :?>
                  <div class=" w-25 pt-4 ps-4 " style="">
                      <div class="ms-3" style="height: 100%;">
                          <form method="Post" action="Produitdet" style="height: 100%; height : 100%;">
                              <input type="hidden" name="id" value="<?php echo $produit['id']  ?>">
                              <button class="border-0 bg-white" style="">
                                  <img style="width= 14rem; height: 14rem;" src="public/image/<?php echo $produit['image'] ?>" alt="produit" style="width:100%; height : 100%;">
                                  <p name="nom" class="text-start pt-3 "><?php echo $produit['nom'] ?><br><span class="text-secondary">Coopérative : <?php echo $produit['cooperative']?></span> <br><b><?php echo $produit['prix']?>Dhs</b></p>
                              </button>
                          </form>
                      </div>
                  </div>
          <?php endforeach; ?>
          </div>
      </div>
<?php
require 'includes/footer.php';
?>    
