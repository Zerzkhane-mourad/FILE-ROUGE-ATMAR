<?php
$data = new MessageController();
$messages = $data->getAllMessage();
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
                      <th>Nom Prenom</th>
                      <th>Email</th>
                      <th>Objet</th>
                      <th>Message</th>
                  </tr>
              </thead>
              <tbody>
              <?php foreach($messages as $message): ?>
                    <tr class="">
                      <td class="align-middle"><?php echo $message['nom'] ?></td>
                      <td class="align-middle"><?php echo $message['email'] ?></td>
                      <td class="align-middle"><?php echo $message['objet'] ?></td>
                      <td class="align-middle"><?php echo $message['message'] ?></td>
                    </tr>  
                    <?php endforeach ?> 
              </tbody>
          </table>
      </div>
    </div>