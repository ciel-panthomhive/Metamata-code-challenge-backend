$(document).ready(function () {
    var status;

    $('#tombol-hati').on('click', '#icon-hati', function () {

        $('#icon-hati').attr('fill', function (index, attr) {

            return attr == 'none' ? 'red' : 'none';

        });

        status = $('#icon-hati').attr('fill')
        console.log(status);

        // $.ajaxSetup({
        //     headers : {
        //         'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        //     }
        // });

        // $.ajax({
        //     type: 'POST',
        //     url: 'url-nya',
        //     data: status:status,
        //     dataType: 'JSON',
        //     success: function(data) {

        //     },
        //     error: function(response) {

        //     }
        // });

        $('#icon-hati').toggleClass('text-red-400');
    });
})
