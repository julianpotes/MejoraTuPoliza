<?php
include("commons/cabecera.php");
?>
  <!--Main content-->
  <main>
    <!--First container-->
    <div class="container">


    </div>
    <!--First container-->

    <!--Second container-->
    <div class="container-fluid mb-3" style="background-color: blue,">
      <div class="container py-4">

        <!--Section: Download-->
        <section>

          <!-- First row -->
          <div class="row my-4 pt-5 wow fadeIn" data-wow-delay="0.4s">

            <!-- First column -->
            <div class="col-lg-10 col-md-12 mb-4 text-center">
           <h2 class="mb-3 my-5 dark-grey-text wow fadeIn" data-wow-delay="0.2s"><strong
                  class="font-weight-bold">Mejoramos Tu Poliza</strong> garantizado</h2>
        <div id="shortcodePreviews">
          <div id="formPreview">
            <div class="card wow fadeInUp"  data-wow-delay="0.3s">
 
                <h5 class="card-header white-text text-center py-4 display-4">
                    <strong >Mejorar Póliza</strong>
                </h5>

                <div class="card-body px-lg-5 pt-0">

        <form class="md-form"  id="f-cot" style="color:blue;">      
                <ul id="sortable-form" class="droptrue drop-list ui-sortable">
                    <li data-template="mTextInputTemp" data-popover="input" class="pb-5 pt-3" style="position: relative; left: 0px; top: 0px;" data-original-title="" title="">
                        <label for="input" style="font-size:1.2rem;">Nombre</label>
                        <input type="text" id="input" class="form-control" placeholder="">
                    </li>
                    <li data-template="mEmailInputTemp" data-popover="input" class="pb-5" style="position: relative; left: 0px; top: 0px;" data-original-title="" title="">
                        <label for="emailInput" style="font-size:1.2rem;">Ingrese Su Mail</label>
                        <input type="email" id="emailInput" class="form-control" placeholder="">
                    </li>
                
                    <li data-template="mFileInputTemp" data-popover="file" class="pb-5" style="position: relative; left: 0px; top: 0px;" data-original-title="" title="">
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left ">
                                <span style="font-size:0.8rem;">Elija Documento</span>
                                <input type="file" id="fileInput">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" style="font-size:1.2rem;" type="text" placeholder="Suba su Archivo">
                            </div>
                        </div>
                    </li>         
                </ul>
                <div class="container-fluid">
                  <div class="row">
                  <div id="juli">
                <select style="">
                  <option>Productor 1</option>
                  <option>Productor 2</option>
                  <option>Productor 3</option>
                  <option>Productor 4</option>
                </select>
              </div>
</div>
                  </div>

           

                    <button class="btn btn-outline-primary btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Enviar</button>
        </form>
            
            </div>
    </div>
            </div>
        </div>
                </div>
       

      
          <!-- /.First row -->

        </section>
        <!--/Section: Download-->

      </div>
    </div>
    <!--Second container-->

   

  

  </main>
  <!--Main content-->

  <?php
include("commons/pie.php");
?>
