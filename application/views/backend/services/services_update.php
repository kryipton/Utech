<?php $this->load->view("backend/includes_for_whole/head");?>

<?php $this->load->view("backend/includes_for_whole/menu");?>
<style type="text/css">
    .image-upload>input {
        display: none;
    }
</style>


<div class="page-content">


    <div class="content">
        <h1 class="c_title">Servisin Yenilenmesi</h1>
        <div class="grid simple ">
            <div class="row" style="margin-top: 50px">
                <div class="grid-body no-border c_grid_padding">
                    <div class="row">

                        <form action="<?php echo base_url("utech_admin_panel_services_yenileme/".$service['id'])?>" method="post" enctype="multipart/form-data">

                            <label for="name">Servisin Adı</label>
                            <input id="name" type="text" class="form-control" name="service_name" value='<?php echo $service['service_name'] ?>'>
                            <br>


                            <br><br>


                            <label>Servisin Basligi</label>
                            <textarea id="editor1" name="service_title" ><?php echo $service['service_title'] ?></textarea>
                            <br><br>



                            <label>Servis Haqqında Məlumat</label>
                            <textarea id="editor2" name="service_desc"><?php echo $service['service_desc'] ?></textarea>
                            <br><br>



                            <label>Ustunluklerimiz(Bu Saheni bos buraxa bilersiniz)</label>
                            <textarea id="editor3" name="service_advantages"><?php echo $service['service_advantages'] ?></textarea>
                            <br><br>

                            <label>Portfolionun Kateqoriyası(Bu Saheni bos buraxa bilersiniz)</label>
                            <select name="service_port" class="form-control">
                                <option value="<?php echo $service['service_port'] ?>"><?php echo $service['service_port'] ?></option>
                                <?php foreach ($categories as $catg) {?>
                                    <?php if ($catg['name'] != $service['service_port']) { ?>
                                    <option value="<?php echo $catg["name"];?>">
                                        <?php echo $catg["name"];?>
                                    </option>
                                    <?php } ?>
                                <?php }?>
                            </select>

                            <br><br>
                            <label>Sekil</label>
                            <br>
                            <div class="image-upload">
                                <label for="file-input">

                                    <img src="<?php echo base_url('uploads/services/'.$service['service_img']) ?>" alt="sekil yuklenmedi" />
                                    <p>Deyismek ucun klikleyin</p>
                                </label>
                                <input id="file-input" type="file" />
                            </div>


                            <button type="submit" class="btn btn-primary">Yenile</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $this->load->view("backend/includes_for_whole/footer");?>
<?php if($this->session->flashdata("success")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("success")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>
<?php if($this->session->flashdata("error")){ ?>
    <script>
        iziToast.warning({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("error")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>
