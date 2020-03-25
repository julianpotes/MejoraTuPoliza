$(function() {    

    $('[data-toggle="tooltip"]').tooltip();
    $('.mdb-select').material_select();
    /*
    $("#contact").load(base + '/modals/contact.html', function() {
        $('#contact-modal').on('shown.bs.modal', function() {
            
            $('#c_name').focus();

            $('#contact-btn').click(function() {
                $('#c_err').text("");
                $('#c_err_name').text("");
                $('#c_err_email').text("");
                const contact = {
                    name: $.trim($('#c_name').val()),
                    email: $.trim($('#c_email').val()),
                    phone: $.trim($('#c_phone').val()),
                    message: $.trim($('#c_message').val())
                };
                $.ajax(base + '/api/v1/requests/card_request.php', {
                    method: "POST",
                    dataType: "json",
                    data: contact,
                }).done(function(data) {
        
                    const { state } = data; 
        
                    if(state === 'OK') {
                        $('#c_ok').text(data.res);
                        setTimeout(function() { $('#contact-modal').modal('hide'); }, 5000);
                    } else if(state === 'Err') {
                        if(data.name) $('#c_err_name').text(data.name);
                        if(data.email) $('#c_err_email').text(data.email);
                    }
                
                }).fail(function(jqXHR, textStatus) {
                    $('#c_err').text(jqXHR.responseJSON.duplicate);
                });
            });
        });
    });

    /*
    $("#activate").load(base + '/modals/activate.html', function() {

        const scanner = new Instascan.Scanner({ 
            video: document.getElementById('preview'),
            mirror: false
        });

        $('#activate-modal').on('shown.bs.modal', function() {

            $('#a_first_name').focus();

            $('#activate-btn').click(function() {

                $(this).hide();
                $(this).unbind();
                $('#preview').removeClass('d-none');

                Instascan.Camera.getCameras()
                    .then(function(cameras) {
                        if(cameras.length > 0) {
                            let selectedCam = cameras[0];
                            $.each(cameras, (i, c) => {
                                if (c.name.indexOf('back') != -1) {
                                    selectedCam = c;
                                    return false;
                                }
                            });
                        
                            scanner.start(selectedCam);
                    
                        } else {
                            alert('No hay cámaras seleccionadas.');
                        }

                    }).catch(function(err) {
                        alert('Se ha producido un error: ' + err);
                    });

                scanner.addListener('scan', function(hash) {

                    $('#a_err').text("");
                    $('#a_err_first_name').text("");
                    $('#a_err_last_name').text("");
                    $('#a_err_email').text("");
                    $('#a_err_email_repeat').text("");
                    $('#a_err_dni').text("");
                    $('#a_err_phone').text("");
                    const contact = {
                        first_name: $.trim($('#a_first_name').val()),
                        last_name: $.trim($('#a_last_name').val()),
                        email: $.trim($('#a_email').val()),
                        email_repeat: $.trim($('#a_email_repeat').val()),
                        phone: $.trim($('#a_phone').val()),
                        dni: $.trim($('#a_dni').val()),
                        hash
                    };
                    //console.log(contact)
                    $.ajax(base + "/api/v1/requests/client_request.php", {
                        method: "POST",
                        dataType: "json",
                        data: contact,
                    }).done(function(data) {
            
                        const { state } = data; 
            
                        if(state === 'OK') {
                            $('.a_').hide('slow');
                            $('#activate-body').css('background', '#617CE9');
                            $('#a_ok_header').text(data.res_h);
                            $('#a_ok_p').text(data.res_p);
                            setTimeout(function() { $('#activate-modal').modal('hide'); }, 5000);
                        } else if(state === 'Err') {
                            if(data.first_name) $('#a_err_first_name').text(data.first_name);
                            if(data.last_name) $('#a_err_last_name').text(data.last_name);
                            if(data.email) $('#a_err_email').text(data.email);
                            if(data.emaill_repeat) $('#a_err_email_repeat').text(data.emaill_repeat);
                            if(data.dni) $('#a_err_dni').text(data.dni);
                            if(data.phone) $('#a_err_phone').text(data.phone);
                        }
                        
                    }).fail(function(jqXHR) {
                        $('#a_err').text(jqXHR.responseJSON.duplicate);
                    });
                });
            });
        });
        $('#activate-modal').on('hidden.bs.modal', function() {
            $('#activate-btn').show();
            $('#preview').addClass('d-none');
            scanner.stop();
        });
    });
    */
    
});