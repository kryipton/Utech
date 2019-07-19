<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/head");?>

<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/menu");?>

    <div class="page-content">


        <div class="content">
            <h1 class="c_title">Portfellərin Kateqoriyaları</h1>
            <div class="grid simple ">
                <div class="row" style="margin-top: 50px">
                    <div class="grid-body no-border c_grid_padding">
                        <div class="row">

                            <a href="<?php echo base_url("utech_admin_panel_portfolio_category_add")?>" class="btn btn-success">Əlavə Et</a>
                            <br><br>

                            <?php $this->load->view("$this->parent_folder/$this->sub_folder/portfolio_category/portfolio_category_delete_render_page/portfolio_category_table");?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $this->load->view("$this->parent_folder/$this->includes_for_whole/footer");?>


