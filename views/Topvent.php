<?php
require  'includes/headersid.php';
require 'includes/sidebar.php';
?>
    <div class="container-fuildcol">
      <div class="d-flex flex-row justify-content-between align-items-center  pt-2">
          <div class="mx-4">
              <h3><strong>Liste des Produit</strong></h3>
          </div>
          <div class="d-flex flex-row ">   
                <button class="btn bgf text-dark h-25 fs-6 mx-4  "  data-bs-toggle="modal" data-bs-target="#exampleModal" >Ajouter Produit</button>                    
          </div>  
      </div> 
      <div class="tab table-responsive mt-2" style="height:26rem">
          <table class="table">
              <thead class=" bgh">
                  <tr>
                      <th>Image</th>
                      <th>Nom de Produit</th>
                      <th>Prix</th>
                      <th>Catéguories</th>
                      <th>Sous-Catéguorie</th>
                      <th>Coopérative</th>
                      <th>Description</th>
                      <th>Quantité</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              <?php foreach($topvents as $topvent): ?>
                  <tr class="">
                      <td class="align-middle text-center"><img  class="logo" src="public/image/<?php echo $topvent['image']?>" alt="produit" ></td>
                      <td class="align-middle text-center"><?php echo $topvent['nom'] ?></td>
                      <td class="align-middle text-center"><?php echo $topvent['prix'] ?></td>
                      <td class="align-middle text-center"><?php echo $topvent['categuorie'] ?></td>
                      <td class="align-middle text-center"><?php echo $topvent['souscateguorie'] ?></td>
                      <td class="align-middle text-center"><?php echo $topvent['cooperative'] ?></td>
                      <td class="align-middle text-center"><?php echo $topvent['description'] ?></td>
                      <td class="align-middle text-center"><?php echo $topvent['quantite'] ?></td>
                      <td class="align-middle text-center">
                          <form method="POST" class="" action="Updatepro">
                              <input type="hidden" name="id" value="<?php echo $topvent['id']; ?>">
                              <button class="btn btn-sm "><i class="fa fa-edit"></i></button>
                          </form>
                          <form method="post" class="" action="">
                              <input type="hidden" name="id" value="<?php echo $topvent['id']; ?>">
                              <button class="btn btn-sm "><a class="text-dark" href="delete"><i class="fa fa-trash"></a></i></button>
                          </form>
                      </td>
                    </tr>  
                    <?php endforeach ?> 
              </tbody>
          </table>
      </div>
    </div>