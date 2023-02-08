<!doctype html>
<html lang="en">
  <head>
  	<title>LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/fontawesome.min.css"); ?>">
	<link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/style.css"); ?>">
</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-12">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3>Ajouter des produits</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      					<div class="row mb-4">
										    <div class="col-md-4">
											    <div class="dbox w-100 d-flex align-items-start">
						        		    <div class="text">
							          </div>
						        </div>
							</div>
						</div>
									<form method="post" action="addProduct/addProduct"  id="contactForm" name="" class="contactForm" action="Accueil.html" >
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="nom" id="name" placeholder="Nom Produit" value="IPhone XR">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="number" class="form-control" name="prix" placeholder="Prix éstimée" value="500000">
												</div>
											</div>
                                            <div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Ajouter" class="btn btn-primary" name="submit">
												</div>
											</div>

										</div>
									</form>
								</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
  </section>



</body>
</html>

