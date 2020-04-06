<?php

require_once './administracion/utils/const.php';

require_once ROOTPATH . '/controller/ProductorController.php';

$productorController = new ProductorController();

$productores = $productorController->findActive();

if(count($_POST) > 0) {

  require_once ROOTPATH . '/controller/PolizaController.php';

  $polizaController = new PolizaController();

  $result = $polizaController->create();
}

include("commons/cabecera.php");
?>
<!--Main content-->
<div class="container my-3 py-3 ">

    <!--Section: Content-->
    <section class="dark-grey-text text-center">

        <h3 class="font-weight-bold pt-5 pb-4">Te Damos Mas Beneficios</h3>
        <p class="font-weight-bold pt-4 pb-4">A todas las polizas les incluimos sin costo seguros de salud donde se
            destacan entre otras la cobertura de Ambulancias/Emergencias Urgencias Consulta Virtual con medicos 24hs
            Descuentos en farmacias</p>
        <div class="row mx-3">
            <div class="col-md-4 px-4 mb-4">
                <h3 class="font-weight-bold pt-5 pb-4">Medicos Online 24hs</h3>
                <div class="view">
                    <img src="./img/undraw_medicine_b1ol.svg" class="img-fluid" alt="smaple image">
                </div>
            </div>
            <div class="col-md-4 px-4 mb-4">
                <h3 class="font-weight-bold pt-5 pb-4">Ambulancias Emergencias Urgencias</h3>
                <div class="view">
                    <img src="./img/undraw_Security_on_ff2u.svg" class="img-fluid" alt="smaple image">
                </div>
            </div>
            <div class="col-md-4 px-4 mb-4">
                <h3 class="font-weight-bold pt-5 pb-4">Descuentos en Farmacias</h3>
                <div class="view">
                    <img src="./img/FARMACIA.png" class="img-fluid text-center" alt="smaple image">
                </div>
            </div>
        </div>

    </section>
    <!--Section: Content-->

    <hr class="linea">
    <div class="container-fluid mt-4" id="formejora"></div>
    <div class="containerjuli bg-white">
        <div class="imagenj">
            <img src="img/undraw_by_my_car_ttge.svg">
        </div>
        <div class="login-content">


            <form action="#" method="post" enctype="multipart/form-data">
                <img src="img/undraw_profile_pic_ic5t.svg">
                <h2 class="title">Mejoramos Tu Poliza</h2>
                <div class="input-div one">
                    <div class="jul">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="djul">
                        <h5>Nombre</h5>
                        <input type="text" name="nombre" class="input"
                            value="<?php echo $_POST ? $_POST['nombre'] : ''; ?>" required>
                        <?php if(isset($result['nombre'])) { ?>
                        <?php foreach($result['nombre'] as $error) { ?>
                        <div class="invalid-feedback d-block"><?php echo $error; ?></div>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="input-div mail">
                    <div class="jul">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="djul">
                        <h5>E-mail</h5>
                        <input type="email" name="email" class="input"
                            value="<?php echo $_POST ? $_POST['email'] : ''; ?>" required>
                        <?php if(isset($result['email'])) { ?>
                        <?php foreach($result['email'] as $error) { ?>
                        <div class="invalid-feedback d-block"><?php echo $error; ?></div>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="input-div Phone">
                    <div class="jul">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="djul">
                        <input type="text" name="telefono" class="input"
                            value="<?php echo $_POST ? $_POST['telefono'] : ''; ?>" placeholder="Ej. 2215560258"
                            pattern="[0-9]{10}" required>
                        <?php if(isset($result['telefono'])) { ?>
                        <?php foreach($result['telefono'] as $error) { ?>
                        <div class="invalid-feedback d-block"><?php echo $error; ?></div>
                        <?php } ?>
                        <?php } ?>
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

                                    <?php foreach($productores as $productor) { ?>
                                    <?php $direccion = ''; ?>
                                    <?php foreach($productor['zonas'] as $zona) { ?>
                                    <?php $direccion .= $zona['zona'] . ', '; ?>
                                    <?php } ?>
                                    <?php foreach($productor['companias'] as $compania) { ?>
                                    <?php $direccion .= $compania['compania'] . ', '; ?>
                                    <?php } ?>

                                    <a href="#" class="opcion">
                                        <div class="contenido-opcion">
                                            <div class="textos">
                                                <div class="p-id d-none"><?php echo $productor['productor_id']; ?></div>
                                                <h1 class="titulo"><?php echo $productor['apellido']; ?>
                                                    <?php echo $productor['nombre']; ?></h1>
                                                <p class="descripcion text-left">
                                                    <?php echo substr($direccion, 0, strlen($direccion) - 2); ?></p>
                                            </div>
                                        </div>
                                    </a>
                                    <?php } ?>
                                </div>
                                <?php if(isset($result['productor'])) { ?>
                                <?php foreach($result['productor'] as $error) { ?>
                                <div class="invalid-feedback d-block"><?php echo $error; ?></div>
                                <?php } ?>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="productor" id="inputSelect" value="">
                        </div>
                    </div>
                </div>
                <?php if(isset($result['documento'])) { ?>
                <?php foreach($result['documento'] as $error) { ?>
                <div class="invalid-feedback d-block"><?php echo $error; ?></div>
                <?php } ?>
                <?php } ?>
                <div data-template="mFileInputTemp" data-popover="file" class="pb-5"
                    style="position: relative; left: 0px; top: 0px;" data-original-title="" title="">
                    <div class="file-field">
                        <div class="btn btn-primary btn-sm float-left ">
                            <span style="font-size:0.8rem;">Elija Documento</span>
                            <input type="file" id="fileInput" name="documento" accept="image/jpeg, application/pdf">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" style="font-size:.8rem;" type="text"
                                placeholder="PDF, JPG">
                        </div>
                    </div>
                </div>
                <a href="https://api.whatsapp.com/send?phone=542216161415&text=Hola,%20Me%20comunico%20desde%20la%20web%20y%20quiero%20contactarme%20con%20un%20Productor."
                    target="_blank">Queres Enviarnos Un Whatsapp?</a>
                <input type="submit" class="btnjuli" value="MEJORAR Mi ACTUAL POLIZA">
                <a class="btn btn-white btn-rounded blue-text font-weight-bold ml-lg-0 wow fadeInLeft waves-effect waves-light animated"
                    data-wow-delay="0.3s"
                    style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s;" data-toggle="modal"
                    data-target="#modalRegisterForm">
                    Cotizamos tu nuevo Seguro</a>
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
                <h4 class="modal-title w-100 font-weight-bold grey-text">Cotizar Nuevo Seguro</h4>
                <button type="button" class="close"
                    style="padding: 3px 1px 20px 2px; -webkit-box-shadow: 20px 17px 14px -14px rgba(143,143,143,0.6);
-moz-box-shadow: 20px 17px 14px -14px rgba(143,143,143,0.6);
box-shadow: 20px 17px 14px -14px rgba(143,143,143,0.6); color:white;margin: 3px; width:30px; height:28px; background:grey; border-radius:50%;"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div></div>

            <div class="modal-body mx-3">
                <div class="container-fluid">
                    <div class="row">
                        <p class="pt-2 pb-3 modal-title text-center grey-text">Ahora podes pedir cotizacion sin Sin
                            Moverte De Tu Casa.</p>
                    </div>
                </div>

                <div class="md-form mb-5">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="orangeForm-name" class="form-control validate">
                    <label data-error="Error" data-success="perfecto" for="orangeForm-name">Nombre</label>
                </div>
                <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="email" id="orangeForm-email" class="form-control validate" required>
                    <label data-error="Error" data-success="perfecto" for="orangeForm-email">e-mail</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fas fa-phone prefix grey-text"></i>
                    <input type="tel" id="orangeForm-tel" class="form-control validate" required pattern="[0-9]{10,13}">
                    <label data-error="Formato erroneo" data-success="perfecto" for="orangeForm-telephone">Telefono Ej
                        221 1112222</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fas fa-motorcycle prefix grey-text"></i>
                    <input type="text" id="orangeForm-pass" class="form-control validate" required>
                    <label data-error="Error" data-success="perfecto" for="orangeForm-pass">Marca</label>
                </div>

                <div class="md-form mb-4">
                    <i class="far fa-address-book prefix grey-text"></i>
                    <input type="text" id="orangeForm-pass" class="form-control validate" required>
                    <label data-error="Error" data-success="perfecto" for="orangeForm-pass">Modelo</label>
                </div>

                <div class="md-form mb-4">
                    <i class="far fa-calendar-alt prefix grey-text"></i>
                    <input type="text" id="orangeForm-pass" class="form-control validate" required pattern="[0-9]{4}>
          <label  data-error=" Formato erroneo" data-success="perfecto" for="orangeForm-pass">Año</label>
                </div>
                <div class="md-form mb-4">
                    <i class="fas fa-wallet prefix grey-text"></i>
                    <input type="text" id="orangeForm-pass" class="form-control validate" required pattern="[0-9]{15}>
          <label  data-error=" Solo numeros" data-success="perfecto" for="orangeForm-pass">Monto Asegurado</label>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange">enviar</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- MODAL CORONA EVENTUAL-->

<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <div class="container-fluid">
                    <h4 class="modal-title w-100 font-weight-bold">Quedate en Casa COVID-19</h4>
                    <div class="row pt-2 text-center grey-text">
                        <p>Dadas las medidas adoptadas por el gobierno, tenes derecho derecho a un buen asesoramiento..
                        </p>
                    </div>
                </div>



                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="form34" class="form-control validate" required>
                    <label data-error="wrong" data-success="right" for="form34">Nombre</label>
                </div>

                <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="email" id="form29" class="form-control validate" required>
                    <label data-error="wrong" data-success="right" for="form29">E-mail</label>
                </div>


                <div class="md-form">
                    <i class="fas fa-pencil prefix grey-text"></i>
                    <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                    <label data-error="wrong" data-success="right" for="form8">Pregutas</label>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-deep-orange">enviar</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- FIIN MODAL CORONA EVENTUAL-->

<?php
include("commons/pie.php");
?>