<?php
$data = new CommandeController();
$commandes = $data->getAllCommande();
$valide = new CommandeController();
$valide->ValiderCommande();
?>
<?php
require  'includes/headersid.php';
require 'includes/sidebar.php';
?>
<div class="container-fuildcol">
          <div class="d-flex flex-row justify-content-between align-items-center  pt-2">
              <div class="mx-4">
                  <h3><strong>Liste des Commandes</strong></h3>
              </div>
              <form method="POST">
                <div class="d-flex flex-row ">   
                        <button type = "submit" name="valider" class="btn bgf text-dark h-25 fs-6 mx-4  "  >Valider les Commandes</button>                    
                </div>
              </form>   
          </div> 
          <div class="tab table-responsive mt-2">
              <table class="table">
                  <thead class=" bgh">
                      <tr>
                          <th>Date de commande</th>
                          <th>image</th>
                          <th>Nom de produit</th>
                          <th>Prix</th>
                          <th>Quantité</th>
                          <th>Nom </th>
                          <th>CIN</th>
                          <th>Adresse</th>
                          <th>Ville</th>
                          <th>Code postale</th>
                          <th>Téléphone</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php foreach($commandes as $commande): ?>
                      <tr>
                          <td class="align-middle text-center"><?php echo $commande['date_de_commande']; ?></td>
                          <td class="align-middle"><img  class="logo" src="public/image/<?php echo $commande['image']?>" alt="produit" ></td>
                          <td class="align-middle"><?php echo $commande['nom_produit'] ?></td>
                          <td class="align-middle text-center"><?php echo $commande['prix'] ?></td>
                          <td class="align-middle text-center"><?php echo $commande['quantite'] ?></td>
                          <td class="align-middle text-center"><?php echo $commande['nom_complet'] ?></td>
                          <td class="align-middle text-center"><?php echo $commande['cin'] ?></td>
                          <td class="align-middle text-center"><?php echo $commande['adresse'] ?></td>
                          <td class="align-middle text-center"><?php echo $commande['ville'] ?></td>
                          <td class="align-middle text-center"><?php echo $commande['code_postale'] ?></td>
                          <td class="align-middle text-center"><?php echo $commande['telephone'] ?></td>
                        </tr>   
                    <?php endforeach ?>     
                  </tbody>
              </table>
          </div>
          </div>

<script src="public/js/jquery.min.js"></script>
<script src="public/js/popper.js"></script>
<script src="public/js/main.js"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>