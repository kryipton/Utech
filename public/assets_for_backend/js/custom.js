// multiple switchler ucun kod
isPrimary = {
    color             : '#8307bd',
    className         : 'switchery'

};

var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {

    var switchery = new Switchery(html, isPrimary);


});lems = Array.prototype.slice.call(document.querySelectorAll('.js-switch-dfcolor'));




//silme islemine alert verme
$('.c_delete_portfolio_category').click(function () {

    $data_url_portfolio_category = $(this).data("url");

    swal({
            title: "Əminsiniz?",
            text: "Silinən məlumatlar geri qaytarılmayacaq!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
                if (willDelete) {
                    // window.location.href = $data_url;
                    $.post($data_url_portfolio_category, {}, function (response) {
                        $('.c_resfresh_portfolio_category').html(response);

                        // multiple switchler ucun kod
                        isPrimary = {
                            color             : '#8307bd',
                            className         : 'switchery'

                        };

                        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

                        elems.forEach(function(html) {

                            var switchery = new Switchery(html, isPrimary);


                        });lems = Array.prototype.slice.call(document.querySelectorAll('.js-switch-dfcolor'));

                    })
                }
            });
});


//editoru initialize etmek ucun kod
CKEDITOR.replace( 'editor1', {});

//dropzone nun dinamik sekilleri yuklemesi
var name = "dropzone";
if($("#" + name).length != 0) {
    var myDropzone = new Dropzone("#dropzone");
    myDropzone.on("complete", function(file) {
        $data_url_of_dropzone = $('#dropzone').data("url");

        $.post( $data_url_of_dropzone, {}, function (response) {
            $('.c_resfresh_portfolio_category').html(response);

            // multiple switchler ucun kod
            isPrimary = {
                color             : '#8307bd',
                className         : 'switchery'

            };

            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

            elems.forEach(function(html) {

                var switchery = new Switchery(html, isPrimary);


            });lems = Array.prototype.slice.call(document.querySelectorAll('.js-switch-dfcolor'));

        })
    });
}


//sekillerden birinin profil sekli secilmesi
$('.c_resfresh_portfolio_category').on('change', '.isPrimary', function () {

    var $data_portfolio = $(this).prop("checked");
    var $data_url_portfolio = $(this).data("url");
    // alert($data_url_1)
    if(typeof $data_portfolio !== "undefined" && typeof $data_url_portfolio !== "undefined"){
        $.post($data_url_portfolio, { data : $data_portfolio}, function (response) {
            $('.c_resfresh_portfolio_category').html(response);

            // multiple switchler ucun kod
            isPrimary = {
                color             : '#8307bd',
                className         : 'switchery'

            };

            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

            elems.forEach(function(html) {

                var switchery = new Switchery(html, isPrimary);


            });lems = Array.prototype.slice.call(document.querySelectorAll('.js-switch-dfcolor'));

        });
    }

});


//switchlernen birden cox elementi secmek
var idler = [];
$(".isChoosed_portfolio").change(function () {

    var $data_portfolio = $(this).prop("checked");

        if ($data_portfolio == true){
            idler.push($(this).attr('id'));
        }else{
            var removeItem = $(this).attr('id');

            idler = jQuery.grep(idler, function(value) {
                return value != removeItem;
            });
        }

});

//butun elementleri secmek
var counter = 0;
$('.c_check_all').click(function () {

    if (counter % 2 === 0){
        $(".isChoosed_portfolio").prop("checked" ,true);
    } else{
        $(".isChoosed_portfolio").prop("checked" ,false);
    }

    counter++;
});


//portfoliodaki birden cox elementi silmek
$('.c_all_delete_portfolio').click(function () {

    $data_url_2 = $(this).data("url");
    $data_url = $(this).data("url2");

    swal({
        title: "Əminsiniz?",
        text: "Silinən məlumatlar geri qaytarılmayacaq!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {

                if (counter % 2 === 0){

                    $.post($data_url_2, {data: idler}, function (response) {

                        $('.c_resfresh_portfolio_category').html(response);

                        // multiple switchler ucun kod
                        isPrimary = {
                            color             : '#8307bd',
                            className         : 'switchery'

                        };

                        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

                        elems.forEach(function(html) {

                            var switchery = new Switchery(html, isPrimary);


                        });lems = Array.prototype.slice.call(document.querySelectorAll('.js-switch-dfcolor'));


                    })
                }else{
                    window.location.href = $data_url;
                }

            }
        });
    event.preventDefault();
});