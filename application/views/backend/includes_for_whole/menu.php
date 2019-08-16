<!--        HEAD NAVBAR                -->
<div class="navbar-inner">
    <div class="header-seperation">
        <a href="index-2.html">
            <img src="<?php echo base_url("public/assets_for_backend")?>/img/logo.png" class="logo" alt="" data-src="<?php echo base_url("public/assets_for_backend")?>/img/logo.png" data-src-retina="assets/img/logo2x.png" width="106" height="21" />
        </a>


    </div>

    <div class="header-quick-nav">
        <div class="pull-left">
            <ul class="nav quick-section">
                <li class="quicklinks">
                    <a href="#" class="" id="layout-condensed-toggle">
                        <i class="material-icons">menu</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>
<!--        HEAD NAVBAR                -->


</div>


<div class="page-container row-fluid">

    <div class="page-sidebar " id="main-menu">

        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">



            <!--                Admin profile-->

            <div class="user-info-wrapper sm">
                <div class="profile-wrapper sm">
                    <img src="<?php echo base_url("public/assets_for_backend")?>/img/profiles/avatar.png" alt="" data-src="<?php echo base_url("public/assets_for_backend")?>/img/profiles/avatar.png" data-src-retina="<?php echo base_url("public/assets_for_backend")?>/img/profiles/avatar.png" width="69" height="69" />
                </div>
                <div class="user-info sm">
                    <div class="username" style="margin-top: 12px;">Admin
                        <a href="<?php echo base_url("utech_admin_panel_login_page_logout")?>" title="Çıxış" class="fa fa-sign-out c_cursor_pointer" style="margin-left: 10px"></a>
                    </div>
                </div>
            </div>

            <!--                Admin profile-->

            <br>





            <!--                Left menu side-->


            <ul>

                <li class="start  open active ">
                    <a href="<?php echo base_url("utech_admin_panel_portfolio")?>">
                        <i class="material-icons">web</i>

<!--                        Portfel-->
                        <span class="title">Portfel</span>

                        <span class="selected"></span>
                    </a>
                </li>

                <li class="start  open active ">
                    <a href="<?php echo base_url("utech_admin_panel_services")?>">
                        <i class="material-icons">work</i>

                        <!--                        Portfel-->
                        <span class="title">Services</span>

                        <span class="selected"></span>
                    </a>
                </li>


                <li class="open active">
                    <a href="<?php echo base_url("utech_admin_panel_partners")?>">
                        <i class="material-icons">email</i>
                        <span class="title">Əməkdasliq</span>
                        <span class=" badge badge-disable pull-right "></span>
                    </a>
                </li>

                <li class="open active">
                    <a href="<?php echo base_url("utech_admin_panel_message")?>">
                        <i class="material-icons">email</i>
                        <span class="title">Mesajlar</span>
                        <span class=" badge badge-disable pull-right "></span>
                    </a>
                </li>

                <li class="open active">
                    <a href="<?php echo base_url("utech_admin_panel_admin_update")?>">
                        <i class="material-icons">update</i>
                        <span class="title">Admin Yeniləməsi</span>
                        <span class=" badge badge-disable pull-right "></span>
                    </a>
                </li>



            </ul>


            <!--                Left menu side-->




            <div class="clearfix"></div>
        </div>
    </div>

    <!--        LOGOUT BUTTON-->
    <div class="footer-widget">
        <div class="pull-right">
            <a href="lockscreen.html"><i class="material-icons">power_settings_new</i></a></div>
    </div>
    <!--        LOGOUT BUTTON-->