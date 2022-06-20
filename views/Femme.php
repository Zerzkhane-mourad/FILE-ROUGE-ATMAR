<?php
$data = new ProduitController();
$produits = $data->getProdcate();

?>
<?php
require  'includes/header.php';
?> 
<div class="container mt-5">
    <div class="d-flex flex-wrap">
    <?php foreach ($produits as $produit) :?>
            <div class="cards w-25 p-4" style="height: 300px;">
                <div class="" style="height: 100%;">
                    <form method="Post" action="Produitdet" style="height: 100%; height : 100%;">
                        <input type="hidden" name="id" value="<?php echo $produit['id']  ?>">
                        <button style="width:100%; height : 90%;">
                            <img src="public/image/<?php echo $produit['image'] ?>" alt="huile" style="width:100%; height : 100%;">
                            <p name="nom" style="" class=""><?php echo $produit['nom'] ?><br><span class="text-secondary">Coopérative : <?php echo $produit['cooperative']?></span> <br><b><?php echo $produit['prix']?>Dhs</b></p>
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
