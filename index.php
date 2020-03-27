<?php
include("commons/cabecera.php");
?>
  <!--Main content-->
  <div class="container-fluid">
  <main>
  <img class="wave" src="img/onda.png">
	<div class="containerjuli bg-white">
		<div class="imagenj">
			<img src="img/undraw_by_my_car_ttge.svg">
		</div>
		<div class="login-content">
			<form action="index.html">
				<img src="img/undraw_profile_pic_ic5t.svg">
				<h2 class="title">Mejaramos Yu Poliza</h2>
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

				  <div class="input-div selector">
					<div class="jul"> 
						 <i class="fa fa-users"></i>
					</div>
					<select style="">
						  <option>Productor 1</option>
						  <option>Productor 2</option>
						  <option>Productor 3</option>
						  <option>Productor 4</option>
						</select>
			  	</div>
			  
            	<a href="#">Envianos Whatsap?</a>
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