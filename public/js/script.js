$(document).ready(function() {

    $("#produto-ver .fotos .owl-carousel").owlCarousel({
        loop: true,
        responsive: {
            1000: {
                items: 1
            }
        },
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true


    });

    $("#produtos a[data-toggle='modal']").on('click', function () {

        var toggle = $(this).attr('data-id');

        $('#modal a').attr('href', '/painel/produtos/excluir/'+toggle)

    });



    tinymce.init({
        selector: 'textarea',
        height: 500,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor textcolor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code help wordcount'
        ],
        toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css']
    });

});