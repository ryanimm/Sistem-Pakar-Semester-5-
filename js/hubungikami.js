$(this).ready(function() {


    $('#jabaryreset').submit(function(e) {
        e.preventDefault()
        var dataSend = $('#jabaryreset').serialize();
        console.log(dataSend)
        $.ajax({
            type: 'POST',
            url: '_php/hubungiKami.php',
            data: dataSend,
            dataType: 'html',
            success: function() {
                Swal.fire({
                    title: 'Sent Successfully!',
                    text: 'Have a nice day :)',
                    icon: 'success',
                    confirmButtonText: 'Ok'
                })
                $('form#jabaryreset')[0].reset();

            }
        });

    });


});