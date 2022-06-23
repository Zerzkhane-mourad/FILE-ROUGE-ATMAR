<?php
$data = new ProduitController();
$produits = $data->getAllProd();
$newProd = new ProduitController();
$newProd -> ajoutProd();
$Produit = new ProduitController();
$Produit->supprimerProd();
?>
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
                  <?php foreach($produits as $produit): ?>
                      <tr class="">
                          <td class="align-middle text-center"><img  class="logo" src="public/image/<?php echo $produit['image']?>" alt="produit" ></td>
                          <td class="align-middle text-center"><?php echo $produit['nom'] ?></td>
                          <td class="align-middle text-center"><?php echo $produit['prix'] ?></td>
                          <td class="align-middle text-center"><?php echo $produit['categuorie'] ?></td>
                          <td class="align-middle text-center"><?php echo $produit['souscateguorie'] ?></td>
                          <td class="align-middle text-center"><?php echo $produit['cooperative'] ?></td>
                          <td class="align-middle text-center"><?php echo $produit['description'] ?></td>
                          <td class="align-middle text-center"><?php echo $produit['quantite'] ?></td>
                          <td class="align-middle text-center">
                              <form method="POST" class="" action="Updatepro">
                                  <input type="hidden" name="id" value="<?php echo $produit['id']; ?>">
                                  <button class="btn btn-sm "><i class="fa fa-edit"></i></button>
                              </form>
                              <form method="post" class="" action="">
                                  <input type="hidden" name="id" value="<?php echo $produit['id']; ?>">
                                  <button class="btn btn-sm "><a class="text-dark" href="delete"><i class="fa fa-trash"></a></i></button>
                              </form>
                          </td>
                        </tr>  
                        <?php endforeach ?> 
                  </tbody>
              </table>
          </div>
        </div>

        <div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                    <div>
                            <h3 class="border-5 mt-1 mx-5 px-1  "><strong>Ajouter un Produit</strong></h3>
                    </div> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <div class="signinf bg-white">
                      <form method="POST" enctype="multipart/form-data">
                        <div class="mb-1 font-weight-bold pt-2">
                            <label class="mb-1 fonts font-weight-bold" for="email"><b>image</b></label>
                            <input type="file" class="form-control rounded-0 border-dark" name="image" value=""  >
                        </div>
                        <div class="mb-1">
                            <div class="mb-1 w-100">
                                <label class="fonts" ><b>Nom de produit</b></label>
                            </div>
                            <input  type="text" class="form-control rounded-0 border-dark" name="nom" required>
                        </div>
                        <div class="mb-1">
                            <div class="mb-1 w-100">
                                <label class="fonts" ><b>Prix</b></label>
                            </div>
                            <input  type="text" class="form-control rounded-0 border-dark" name="prix" required>
                        </div>
                        <div class="mb-1">
                            <div class="mb-1 w-100">
                                <label class="fonts" ><b>Catéguorie</b></label>
                            </div>
                            <input  type="text" class="form-control rounded-0 border-dark" name="categuorie" required>
                        </div>
                        <div class="mb-1">
                            <div class="mb-1 w-100">
                                <label class="fonts" ><b>Sous-Catéguorie</b></label>
                            </div>
                            <input  type="text" class="form-control rounded-0 border-dark" name="souscateguorie" required>
                        </div>
                        <div class="mb-1">
                            <div class="mb-1 w-100">
                                <label class="fonts" ><b>Coopérative</b></label>
                            </div>
                            <input  type="text" class="form-control rounded-0 border-dark" name="cooperative" required>
                        </div>
                        <div class="mb-1">
                            <div class="mb-1 w-100">
                                <label class="fonts" ><b>Déscription</b></label>
                            </div>
                            <textarea class="form-control border-dark rounded-0" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-2">
                            <div class="mb-1 w-100">
                                <label class="fonts"><b>Quantité</b></label>
                            </div>
                            <input  type="text" class="form-control rounded-0 border-dark" name="quantite"  required>
                        </div>
                        <div class="mb-2">
                            <div class="mb-1 w-100">
                                <label class="fonts"><b>Statut</b></label>
                            </div>
                            <input  type="text" class="form-control rounded-0 border-dark" name="statut"  required>
                        </div>
                        <div class="d-flex align-items-center fonts pb-3">
                            <button type="submit"  name="submit" class=" w-100 bgh text-dark b  py-2 px-4 rounded-0   ms-auto fonts  border-0 ">
                                <b>Ajouter</b> 
                            </button>
                        </div>
                    </form>       
                  </div>
              </div>
            </div>
          </div>
        </div> 



<script src="public/js/jquery.min.js"></script>
<script src="public/js/popper.js"></script>
<script src="public/js/main.js"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>