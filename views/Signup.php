<?php

    $creeUser = new UsersController();
    $creeUser->inscription();

?>
<?php
require  'includes/header.php';
?> 
 
 <section class="h-100 my-3 mb-5">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center  my-4  fonts">
                        <h3>Créer un compte</h3>
					</div>
					<div class="card shadow-lg border-0">
						<div class="card-body px-5 py-3">
							<form method="POST" id="form">
								<div class="mb-3 font-weight-bold pt-2">
									<label class="mb-2 fonts font-weight-bold" for="email"><b>Nom</b></label>
									<input id="name" type="text" class="form-control rounded-0 border-dark" name="nom"  >
									<small id="messagename" class="text-danger"></small>
								</div>
                                
                                <div class="mb-3">
									<div class="mb-2 w-100">
										<label class="fonts" for="email"><b>Email</b></label>
									</div>
									<input id="email" type="email" class="form-control rounded-0 border-dark" name="email">
									<small id="messageemail" class="text-danger "></small>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="fonts" for="password"><b>Mot de pass</b></label>
									</div>
									<input id="password" type="password" class="form-control rounded-0 border-dark" name="password">
								    <small id="messagepassword" class="text-danger "></small>
								</div>

                                <div class="mb-3">
									<div class="mb-2 w-100">
										<label class="fonts" for="password"><b>CONFIRM Mot de pass</b></label>
									</div>
									<input id="conpassword" type="password" class="form-control rounded-0 border-dark" name="confirmpassword">
									<small id="messageconfpass" class="text-danger "></small>
								</div>

								<div class="d-flex align-items-center fonts pb-3">

									<button type="submit"  name="submit" class=" w-100 bg-black text-light b  py-2 px-4 rounded-0   ms-auto fonts  border-0 ">
										<b>CREER UN COMPTE</b> 
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
require 'includes/footer.php';

?>	
