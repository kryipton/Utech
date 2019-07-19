//galereyadaki silme islemine alert verme
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

                    })
                }
            });

});

