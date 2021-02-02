$(document).ready(function () {
    var status;

    $('.tombol-hati').on('click', '.icon-hati', function () {

        $(this).attr('fill', function (index, attr) {

            return attr == 'none' ? 'red' : 'none';

        });

        status = $(this).attr('fill')
        console.log(status);
        $(this).toggleClass('text-red-400');

        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });

        // $.ajax({
        //     type: 'POST',
        //     url: '/story/like',
        //     data: { status: status },
        //     dataType: 'JSON',
        //     success: function (data) {

        //     },
        //     error: function (response) {

        //     }
        // });


    });

})
