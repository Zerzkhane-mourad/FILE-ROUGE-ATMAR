<?php
	$login= new UsersController();
    $login->authtifi();
?>
<?php
if (isset($_SESSION['id'])) {
	Redirect::to('Home'); 
} else{

require  'includes/header.php';
?>     
	
	<section class="h-100 my-3 mb-5">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center  my-4  fonts">
                        <h3>CONNEXION</h3>
					</div>
					<div class="card shadow-lg border-0">
						<div class="card-body px-5 py-3">
							<form method="POST">
								<div class="mb-3 font-weight-bold">
									<label class="mb-2 fonts font-weight-bold" for="email"><b>E-Mail Address</b></label>
									<input id="email" type="email" class="form-control rounded-0 border-dark" name="email" value="" required >
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="fonts" for="password"><b>Password</b></label>
									</div>
									<input id="password" type="password" class="form-control rounded-0 border-dark" name="password" required>
								</div>

								<div class="d-flex align-items-center fonts">
									<button type="submit" name="submit" class="w-100 bg-black text-light b  py-2 px-4 rounded-0   ms-auto fonts  border-0 ">
										<b>CONNEXION</b> 
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-2 border-0 fonts">
							<div class="text-center">
								Vous n'avez pas de compte ? <a href="Signup" target="_blank" class="text-dark text-decoration-none">créer un compte</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
require 'includes/footer.php';
?>	
<?php }	?>