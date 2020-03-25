$(function() {

    $('[data-toggle="tooltip"]').tooltip();
    $('.mdb-select').material_select();

    $('.carousel').carousel({
        interval: 4000
    });
    
    const $reservationModal = $('#reservation-modal');

    function reservation(p_id) {
        $reservationModal.modal('show');
        $.ajax("./api/v1/reservations/create.php", {
            method: "POST",
            dataType: "json",
            data: { id: p_id },
        });
    }

    if(res) {
        reservation(id);
    }

    $('#btn-reservation').click(function() {

        if(logged) {
            reservation(id);
        } else {
            window.location = `${base}/login.php?id=${id}&reservation=true`;
        }

        $reservationModal.on('hidden.bs.modal', function() {
            window.location.href = base;
        });
    });

    $("#countdown").TimeCircles({
        circle_bg_color: "#e6e6e6",
        time: { 
            Days: {
                show: false,
            },
            Hours: {
                show: true,
                text: "Horas",
                color: "#5370e6"
            },
            Minutes: {
                show: true,
                text: "Minutos",
                color: "#e85168"
            },
            Seconds: {
                show: true,
                text: "Segundos",
                color: "#eca138"
            }
        }
    });

});