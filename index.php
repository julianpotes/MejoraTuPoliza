<?php
include("commons/cabecera.php");
?>
  <!--Main content-->
  <div class="container-fluid mt-4">
  <main>
  
	<div class="containerjuli bg-white">
		<div class="imagenj">
			<img src="img/undraw_by_my_car_ttge.svg">
		</div>
		<div class="login-content">
			<form action="index.html">
				<img src="img/undraw_profile_pic_ic5t.svg">
				<h2 class="title">Mejoramos Tu Poliza</h2>
           		<div class="input-div one"> 
           		   <div class="jul">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="djul">
           		   		<h5>Nombre</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div mail">
           		   <div class="jul"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="djul">
           		    	<h5>E-mail</h5>
           		    	<input type="email" class="input">
            	   </div>
				</div>
				<div class="input-div Phone">
					<div class="jul"> 
						 <i class="fa fa-phone"></i>
					</div>
					<div class="djul">
						 <h5>Telefono</h5>
						 <input type="phone" class="input">
				 	</div>
				  </div>

			
				  <div class="container-fluid">
					  <div class="row">
					  <div class="contenedorselect">
	
								<div class="selectbox">
									<div class="select" id="select">
										<div class="contenido-select">
											<h1 class="titulo">Lista De productores</h1>
											<p class="descripcion">Elegi segun tu comodidad.</p>
										</div>
										<i class="fas fa-angle-down"></i>
									</div>

									<div class="opciones" id="opciones">
										<a href="#" class="opcion">
											<div class="contenido-opcion">
												<div class="textos">
													<img src="img/prod1.png" alt="">
													<h1 class="titulo">Productor-1</h1>
													<p class="descripcion">direccion.</p>
												</div>
											</div>
										</a>
										<a href="#" class="opcion">
											<div class="contenido-opcion">
												<img src="img/prod2.png" alt="">
												<div class="textos">
												<h1 class="titulo">Productor-2</h1>
													<p class="descripcion">direccion.</p>
												</div>
											</div>
										</a>
										<a href="#" class="opcion">
											<div class="contenido-opcion">
												<img src="img/prod3.png" alt="">
												<div class="textos">
												<h1 class="titulo">Productor-3</h1>
													<p class="descripcion">direccion.</p>
												</div>
											</div>
										</a>
										<a href="#" class="opcion">
											<div class="contenido-opcion">
												<img src="img/prod4.png" alt="">
												<div class="textos">
												<h1 class="titulo">Productor-4</h1>
													<p class="descripcion">direccion.</p>
												</div>
											</div>
										</a>
										<a href="#" class="opcion">
											<div class="contenido-opcion">
												<img src="img/prod5.png" alt="">
												<div class="textos">
												<h1 class="titulo">Productor-5</h1>
													<p class="descripcion">direccion.</p>
												</div>
											</div>
										</a>
									</div>
								</div>

								<input type="hidden" name="pais" id="inputSelect" value="">


							</div>
					  </div>
				  </div>
				  
        
          <div data-template="mFileInputTemp" data-popover="file" class="pb-5" style="position: relative; left: 0px; top: 0px;" data-original-title="" title="">
                          <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left ">
                                <span style="font-size:0.8rem;">Elija Documento</span>
                                  <input type="file" id="fileInput">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" style="font-size:.8rem;" type="text" placeholder="Subir">
                            </div>
                          </div>              
                        </div>  
            	<a href="#">Queres Enviarnos Un Whatsapp?</a>
            	<input type="submit" class="btnjuli" value="Enviar">
            </form>
        </div>
    </div>
  </main>
  <!--Main content-->
  </div>
  

  <?php
include("commons/pie.php");
?>