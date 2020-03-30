<?php
include("commons/cabecera.php");
?>
  <!--Main content-->
  <div class="container my-5 py-5 z-depth-1">


  <!--Section: Content-->
  <section class="dark-grey-text text-center">
    
    <h3 class="font-weight-bold pt-5 pb-4">Te Damos Mas Beneficios</h3>
     <p  class="font-weight-bold pt-4 pb-4">A todas las polizas les incluimos sin costo
seguros de salud donde se destacan
entre otras la cobertura de
Ambulancias/Emergencias/Urgencias
Consulta Virtual con medicos 24hs
Descuentos en farmacias</p>
    <div class="row mx-3">
      <div class="col-md-4 px-4 mb-4">
	  <h3 class="font-weight-bold pt-5 pb-4">Medicos Online 24hs</h3>
        <div class="view">
          <img src="./img/undraw_medicine_b1ol.svg" class="img-fluid" alt="smaple image">
        </div>

      </div>
     <div class="col-md-4 px-4 mb-4">
	 <h3 class="font-weight-bold pt-5 pb-4">Ambulancias/Emergencias/Urgencias</h3>
        <div class="view">
          <img src="./img/undraw_Security_on_ff2u.svg" class="img-fluid" alt="smaple image">
        </div>

      </div>
      <div class="col-md-4 px-4 mb-4">
	  <h3 class="font-weight-bold pt-5 pb-4">Descuentos en farmacias</h3>
        <div class="view">
          <img src="./img/FARMACIA.png" class="img-fluid text-center" alt="smaple image" >
        </div>

      </div>
    </div>

  </section>
  <!--Section: Content-->

  <div class="container-fluid mt-4">
</div>
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
													<h1 class="titulo">Productor-1</h1>
													<p class="descripcion">direccion.</p>
												</div>
											</div>
										</a>
										<a href="#" class="opcion">
											<div class="contenido-opcion">
												<div class="textos">
												<h1 class="titulo">Productor-2</h1>
													<p class="descripcion">direccion.</p>
												</div>
											</div>
										</a>
										<a href="#" class="opcion">
											<div class="contenido-opcion">
												<div class="textos">
												<h1 class="titulo">Productor-3</h1>
													<p class="descripcion">direccion.</p>
												</div>
											</div>
										</a>
										<a href="#" class="opcion">
											<div class="contenido-opcion">
												<div class="textos">
												<h1 class="titulo">Productor-4</h1>
													<p class="descripcion">direccion.</p>
												</div>
											</div>
										</a>
										<a href="#" class="opcion">
											<div class="contenido-opcion">
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
                                <input class="file-path validate" style="font-size:.8rem;" type="text" placeholder="PDF, JPG">
                            </div>
                          </div>              
                        </div>  
            	<a href="#">Queres Enviarnos Un Whatsapp?</a>
				<input type="submit" class="btnjuli" value="Enviar">
			</form>
			
          </a>
        </div>
    </div>
  </main>
  <!--Main content-->
  </div>
  			<!-- VENTANA MODAL-->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
		<h4 class="modal-title w-100 font-weight-bold grey-text">Pedido</h4>
		  </div>
		  <div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>
      <div class="modal-body mx-3">
		  <div class="container-fluid">
		  <div class="row"> 
		  <p class="pt-2 pb-3 modal-title text-center grey-text">Dadas las medidas adoptadas por el gobierno, tenes derecho a poder bajar
			costos de polizas vigentes.
		</p>
		</div>
		  </div>
	  
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Nombre</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="orangeForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">e-mail</label>
        </div>

        <div class="md-form mb-4">
		<i class="fas fa-phone prefix grey-text"></i>
          <input type="phone" id="orangeForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Telefono</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange">enviar</button>
      </div>
    </div>
  </div>
</div>



  <?php
include("commons/pie.php");
?>