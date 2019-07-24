

						<div class="col-xl-2 col-lg-3 text-lg-left text-xl-right d-none d-lg-block">
							<div class="header_phone">
								<h6>
									<span>1-800</span>-123-4567
								</h6>
							</div>
						</div>
						<!-- <div class="search_modal affix-top">
                <a href="#" class="search_modal_button header-button">
                    <i class="fa fa-search"></i>
                </a>
            </div> -->
					</div>
				</div>
				<!-- header toggler -->
				<span class="toggle_menu">
					<span></span>
				</span>
			</header>


			<section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1><?php echo $single['service_name'] ?></h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="<?php echo base_url('Home') ?>">Home</a>
								</li>

								<li class="breadcrumb-item active">
									<?php echo $single['service_name'] ?>

                                </li>
							</ol>
							<div class="divider-15 d-none d-xl-block"></div>
						</div>
					</div>
				</div>
			</section>


			<section class="ls s-pt-30 s-pb-50 s-pt-lg-50 s-pb-lg-100 c-mb-50 service-item4">
				<div class="d-none d-lg-block divider-65"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-4 c-gutter-50 service-widget">

							<h6>Diger Servisler</h6>
							<ul class="list">
                                <?php foreach ($services as $service) {?>
								<li>
									<a href="<?php echo base_url('Services/Single/'.$service['id']) ?>"><?php echo $service['service_name'] ?></a>
                                    <?php } ?>
								</li>
							</ul>
						</div>
						<div class="col-md-8 ">
							<img style="
                                       width: 770px;
                                       height: 513.33px;
                                        " src="<?php echo base_url('uploads/services/'.$single['service_img']) ?>" alt="">
							<div class="icon-box hero-bg single">
								<p class="excerpt">
									<?php echo $single['service_title'] ?>
								</p>
								<p>
                                    <?php echo $single['service_desc'] ?>
                                </p>
								<div class="row c-gutter-60 c-mb-20 c-mb-lg-40">
                                    <?php if ($portfolio) { ?>
									<div class="col-md-12 col-lg-0 left-part">
										<div class="progress-service">
											<h6 style="color: darkred">Islerimiz</h6>
                                            <?php foreach ($portfolio as $port) {?>

											<p class="progress-title"><?php echo $port['name'] ?>     <?php echo $port['desc']?></p>
											<div class="progress">
												<div>
												</div>
											</div>
                                            <?php }  ?>

										</div>

									</div>
                                    <?php } ?>
                                        <?php if ($single['service_advantages']) {?>
									<div class="col-md-12 col-lg-6 right-part">
										<h6 style="color: darkred" >Ustunluklerimiz</h6>
									</div>
                                        <?php } ?>
								</div>
								<!-- .row -->

								<p>
									<?php echo $single['service_advantages'] ?>
								</p>

							</div>
							</div>
						</div>
						<!-- .col-* -->
					</div>
				</div>
				<div class="d-none d-lg-block divider-50"></div>
			</section>