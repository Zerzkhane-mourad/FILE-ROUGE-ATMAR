<?php
$data = new ProduitController();
$produits = $data->getStatut();
$data = new ProduitController();
$goutprods = $data->getGout();
?>
<?php
require  'includes/header.php';
?>       
      
      <div class="mt-3" style="background-image: url(public/image/zyro-image\ 1.png);  width: 100%">
            <div class="container">
                <h2 class="fontf py-5 text-center text-white ">
                    LA PLACE DE MARCHÉ DES TRÉSORS ARTISANAUX
                </h2>
            </div>
            <div class="text-center">
                <button type="button" class="bgh  mb-5 py-2 px-4 rounded-3 "><b>MAGASINEZ NOS MEILLEURS VENDEURS</b></button>
            </div>
      </div>
      <div class="fontf mt-5 ms-5">
        <h5>LE GOÛT DU MAROC</h5>
      </div>
      <div class="container bg-white">
          <div class="bg-white d-flex flex-wrap">
          <?php foreach ($goutprods as $goutprod) :?>
                  <div class=" w-25 p-4 " style="">
                      <div class="ms-3" style="height: 100%;">
                          <form method="Post" action="Produitdet" style="height: 100%; height : 100%;">
                              <input type="hidden" name="id" value="<?php echo $goutprod['id']  ?>">
                              <button class="border-0 bg-white" style="">
                                  <img style="width= 14rem; height: 14rem;"  src="public/image/<?php echo $goutprod['image'] ?>" alt="produit" style="width:100%; height : 100%;">
                                  <p name="nom" class="text-start pt-3 "><?php echo $goutprod['nom'] ?><br><span class="text-secondary">Coopérative : <?php echo $goutprod['cooperative']?></span> <br><b><?php echo $goutprod['prix']?>Dhs</b></p>
                              </button>
                          </form>
                      </div>
                  </div>
          <?php endforeach; ?>
          </div>
      </div>
      <div class="mt-3" style="background-image: url(public/image/decoration.png);  width: 100%">
        <div class="container">
            <h2 class="fontf py-5 text-center text-white ">
                LA PLACE DE MARCHÉ DES TRÉSORS ARTISANAUX
            </h2>
        </div>
        <div class="text-center">
            <button type="button" class="bgh mb-5 py-2 px-4 rounded-3 border-none "><b>MAGASINEZ NOS MEILLEURS VENDEURS</b></button>
        </div>
      </div>
      <div class="fontf mt-5 ms-5">
        <h5>Top vent</h5>
      </div>
      <div class="container bg-white">
          <div class="bg-white row ">
          <?php foreach ($produits as $produit) :?>
                  <div class="col-2 w-25 p-4  " style="">
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
      <div class="d-flex justify-content-around  align-items-baseline pt-4 pb-3 rounded-2 bgh">
        <div class="fontliv">
          <h5>LIVRAISON GRATUITE</h5>
        </div>
        <div>
          <p class="fw-light fonts">Sur toutes les commandes à  1000 Dhs</p>
        </div>
        <div class="">
          <button type="button" class="bg-black  colorb  py-2 px-4 rounded-3 border-none "><b>MAGASINER NOS MEILLEURS PROMONTIONS</b></button>
        </div>
      </div>
      <div class="mt-3" style="background-image: url(public/image/cosm.png);  width: 100%">
        <div class="container">
            <h2 class="fontf py-5  text-white ">
              SOINS  BIO MAROCAINS
            </h2>
        </div>
        <div class="container me-4">
            <button type="button" class="bgh w-25  mb-5 py-2 px-5 rounded-3 border-none "><b>VOIR LES SOIN</b></button>
        </div>
      </div>
      <div class="mt-4 bgh py-4">
            <div class="text-center fontliv">
            <h5 >A PARTIR DE +200 AVIS DE CLIENTS</h5>
            </div>
            <div class="d-flex justify-content-center mt-4 ">
            <div  class="shadow-lg m bg-white rounded  text-center py-3 px-5  my-4 me-2">
                <p class="fw-bold">Khadija</p>
                <img class="imageav" src="./public/image/avis1.png" alt="">
                <p class="fst-italic">Je suis trop contente de ma djellaba<br>Reçu dans les délais et en bon état !!</p>
            </div>
            <div  class="shadow-lg m bg-white rounded  text-center py-3 px-5  me-2">
                <p class="fw-bold">Mourad</p>
                <img class="imageav" src="./public/image/avis2.png" alt="">
                <p  class="mt-2 fst-italic">Miel de thym vraiment toop,<br>je le recommande vivement</p>
            </div>
            <div  class="shadow-lg m bg-white rounded  text-center py-3 px-5  my-4 ">
                <p class="fw-bold ">Souad</p>
                <img class="imageav" src="./public/image/avis3.png" alt="">
                <p class="fst-italic">Merci beaucoup, l'article est parfait<br>et un excellent service client</p>
            </div>
            </div>
       </div>
<?php
require 'includes/footer.php';
?>       