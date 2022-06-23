<?php
$newMessage = new MessageController();
$newMessage -> EnvoyerMessage();
?>
<?php
require 'includes/header.php';
?>    
  <div class="container  ms-5">    
      <section class="ms-5">
        <h2 class="h1-responsive font-weight-bold text-center my-5">Contactez-Nous</h2>
        <p class="text-center w-responsive mx-auto pb-5">La douleur elle-même est beaucoup de douleur Il s'échappe, il aime son erreur, il ne peut jamais correctement prévoir ce plaisir, pour ainsi dire, la vérité est que chacun de nous viendra à lui avec un plaisir complet, mais le résultat viendra de lui.</p>
        <div class="row justify-content-around">    
          <div class="col-lg-5 mb-lg-0 mb-4">
            <div class="card p-3">
              <div class="card-body">
                <div class="form-header accent-1">
                  <h3 class="mt-2"><b>Écrivez-nous :</b></h3>
                </div>
                <p class="dark-grey-text">Nous écrirons rarement, mais seulement le meilleur contenu.</p>
                <form method="POST">
                    <div class="md-form mb-2">
                      <i class="fas fa-user prefix grey-text"></i>
                      <label for="form-name"><b>Nom</b></label>
                      <input type="text" name="nom"  class="form-control rounded-0 border-dark ">
                    </div>
                    <div class="md-form mb-2">
                      <i class="fas fa-envelope prefix grey-text"></i>
                      <label for="form-email"><b>Email</b></label>
                      <input type="text" name="email" class="form-control rounded-0 border-dark">
                    </div>
                    <div class="md-form mb-2">
                      <i class="fas fa-tag prefix grey-text"></i>
                      <label for="form-Subject"><b>Objet</b></label>
                      <input type="text" name="objet" class="form-control rounded-0 border-dark">
                    </div>
                    <div class="md-form mb-2">
                      <i class="fas fa-pencil-alt prefix grey-text"></i>
                      <label for="form-text"><b>Envoyer un message</b></label>
                      <textarea name="message" class="form-control md-textarea rounded-0 border-dark" rows="3"></textarea>
                    </div>
                    <div class="text-center mt-3">
                      <button type="submit" name="submit" class="btn rounded-0 border-dark bg-dark text-light px-3"><b>Envoyer</b></button>
                    </div> 
                </form>  
              </div>
            </div>    
          </div>
          <div class="col-lg-7">
            <div id="map-container-section" class="z-depth-1-half map-container-section ms-5 mt-3   mb-4" style="height: 400px">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53991.262423910026!2d-8.560655450788026!3d32.245867614933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaefcd3cdac94a5%3A0x2cfe67e059e518d!2sYoussoufia!5e0!3m2!1sfr!2sma!4v1654834355089!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="row pt-5 mt-2 ms-2 me-5 text-center">
              <div class="col-md-4">
                <a class="btn-floating  accent-1">
                  <i class="fas text-dark fa-map-marker-alt"></i>
                </a>
                <p>Youssoufia, 94126</p>
              </div>
              <div class="col-md-4">
                <a class="btn-floating  accent-1">
                  <i class="text-dark fas fa-phone"></i>
                </a>
                <p>+212 637 67 67 65</p>
              </div>
              <div class="col-md-4">
                <a class="btn-floating  accent-1">
                  <i class="text-dark fas fa-envelope"></i>
                </a>
                <p>AtmarBio@gmail.com</p>
              </div>
            </div>
          </div>    
        </div>
      </section>
  </div>  
<?php
require 'includes/footer.php';
?>    