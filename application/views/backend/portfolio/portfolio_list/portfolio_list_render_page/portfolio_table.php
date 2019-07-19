
<a href="<?php echo base_url("utech_admin_panel_portfolio_add")?>" class="btn btn-success c_right">
    <i class="fa fa-plus"></i>
    <span class="c_add_text">Əlavə Et</span>
</a>

<!--                            dropzone-->
<!--                            <form action="/file-upload" class="dropzone c_dropzone">-->
<!--                                <div class="fallback">-->
<!--                                    <input name="file" type="file" multiple />-->
<!--                                    sekilleri buraya surukleyin-->
<!--                                </div>-->
<!--                            </form>-->
<!--                            dropzone-->


<!--                            portfoliolarin listi-->
<table class="table no-more-tables table-bordered">

    <!--                                tablenin basliqi-->
    <thead>
    <th style="width:22%">Proyektin Adı</th>
    <th style="width:9%">Proyektin Ana Şəkli</th>
    <th style="width:6%">Yüklənmə Tarixi</th>
    <th style="width:5%">Qalereya</th>
    <th style="width:5%">Əməliyatlar</th>
    </thead>
    <!--                                tablenin basliqi-->


    <!--                                tablenin bodysi-->
    <tbody>
    <?php foreach ($portfolio as $item) {?>
        <tr>
            <td class="v-align-middle c_vertical_align_middle">
                <?php echo $item["name"]?>
            </td>
            <td class="v-align-middle c_vertical_align_middle text-center">
                <img width="120px" height="100px" src="https://html.com/wp-content/uploads/very-large-flamingo.jpg" alt="">
            </td>
            <td class="c_vertical_align_middle text-center">
                <?php echo $item["upload_date"]?>
            </td>
            <td class="v-align-middle c_vertical_align_middle text-center">
                <a href="<?php echo base_url("utech_admin_panel_portfolio_gallery/$item[id]")?>" class="btn btn-primary">
                    <i class="fa fa-image"></i>
                    Qalereya
                </a>
            </td>
            <td class="v-align-middle c_vertical_align_middle text-center">
                <a href="<?php echo base_url("utech_admin_panel_portfolio_update/$item[id]")?>" class="btn btn-warning">
                    <i class="fa fa-pencil-square-o"></i>
                    Yenilə
                </a>
                <button data-url="<?php echo base_url("utech_admin_panel_portfolio_delete/$item[id]")?>" class="btn btn-danger c_delete_portfolio_category">
                    <i class="fa fa-trash"></i>
                    Sil
                </button>
            </td>
        </tr>
    <?php }?>
    </tbody>
    <!--                                tablenin bodysi-->


</table>
<!--                            portfoliolarin listi-->


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
                        $('.c_resfresh_portfolio_category').html(response);

                    })
                }
            });
    });
</script>

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