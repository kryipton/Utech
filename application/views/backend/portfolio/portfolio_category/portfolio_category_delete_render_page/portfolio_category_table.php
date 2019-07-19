<?php if (!empty($portfolio_categories)){?>
    <table class="table no-more-tables table-bordered c_resfresh_portfolio_category">
        <thead>
        <th style="width:80%">Kateqoriyanın Adı</th>
        <th style="width:19%">Əməliyyatlar</th>
        </thead>

        <tbody>

        <?php foreach ($portfolio_categories as $portfolio_category) {?>
            <tr>
                <td class="v-align-middle c_vertical_align_middle">
                    <?php echo $portfolio_category["name"]?>
                </td>
                <td class="v-align-middle c_vertical_align_middle">
                    <a href="<?php echo base_url("utech_admin_panel_portfolio_category_update/$portfolio_category[id]")?>" class="btn btn-warning">Yenilə</a>
                    <button data-url="<?php echo base_url("utech_admin_panel_portfolio_category_delete/$portfolio_category[id]")?>" class="btn btn-danger c_delete_portfolio_category">Sil</button>
                </td>
            </tr>
        <?php }?>

        </tbody>
    </table>
<?php }else{?>
    <div class="alert alert-info text-center">
        <h3>Məlumat daxil edilməmişdir</h3>
    </div>
<?php }?>



<!--sehifenin islemesi ucun lazim olan scriptler-->
<script>
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
                        // $('.c_img_list_container').empty();
                        // alert(response);
                        $('.c_resfresh_portfolio_category').html(response);

                    })
                }
            });

    });

</script>
<!--sehifenin islemesi ucun lazim olan scriptler-->


<!--melumat alerti-->
<?php if($this->session->flashdata("alert")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("alert")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>