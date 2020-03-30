<?php
include("commons/cabecera.php");
?>

<main>
  <!--Second container-->
  <div class="container-fluid mb-3" style="background-color: blue,">
      <div class="container py-4">
        <div class="container-fluid">
          <div class="row">
            <div class="card text-center">
              <div class="card-body align-items-center">
              <div class="containerjuli">
              <div class="imagenj">
                <img src="img/undraw_by_my_car_ttge.svg">
              </div>

              <div class="login-content">
                  <form action="index.html">
                    <img src="img/undraw_profile_pic_ic5t.svg">
                    <h2 class="title">Mejaramos Tu Poliza</h2>
                    
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
                        <div data-template="mFileInputTemp" data-popover="file" class="pb-5" style="position: relative; left: 0px; top: 0px;" data-original-title="" title="">
                          <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left ">
                                <span style="font-size:0.8rem;">Elija Documento</span>
                                  <input type="file" id="fileInput">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" style="font-size:.8rem;" type="text" placeholder="Suba su Archivo">
                            </div>
                          </div>              
                        </div>  
                        <a href="#">Queres Enviarnos un Whatsapp?</a>
                        <input type="submit" class="btnjuli" value="Enviar">
                  </form>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
    <!--Second container-->
</main>
  <!--Main content-->

  <?php
include("commons/pie.php");
?>


