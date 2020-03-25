$(function() { 

    $('[data-toggle="tooltip"]').tooltip();
    $('.mdb-select').material_select();

    const scanner = new Instascan.Scanner({ 
        video: document.getElementById('preview'),
        mirror: false
    });

    displayCam = $activateBtn => {

        $activateBtn.hide();
        $activateBtn.unbind();
        $('#video-container').removeClass('d-none');

        Instascan.Camera.getCameras()
            .then(function(cameras) {
                if(cameras.length > 0) {
                    let selectedCam = cameras[0];
                    $.each(cameras, (i, c) => {
                        if(c.name.indexOf('back') != -1) {
                            selectedCam = c;
                            return false;
                        }
                    });
                        
                    scanner.start(selectedCam)
                        .then(() => {
                            $('#video-path').css('background', '#F2F2F2');
                        })
                        .catch(function(e) {
                            alert('Se ha producido un error: ' + e);
                        });
                            
                } else {
                    alert('No hay cámaras seleccionadas.');
                }

            }).catch(function(e) {
                alert('Se ha producido un error: ' + e);
            });

        scanner.addListener('scan', function(hash) {
            $('#hash').val(hash);
            $('#form-dc').submit();
        });
    }

    if(isPost) {
        displayCam($('#activate-btn'));
    }

    $('#activate-btn').click(function() {
        displayCam($(this));
    });

});