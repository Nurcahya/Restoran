<?php
$this->load->view('backend/tema/header');

?>
	<article class="page-title">

                <section class="title">
                    <h1>Halaman <span class="text-color">Administrator</span></h1>
                </section> 

                <!-- .breadcrumbs start -->
                <ul class="breadcrumbs">
                    <li>
                        Selamat datang
                    </li>
                    <li class="home-icon">
                        <a href="index.html">/</a>
                    </li>
                    <li class="active">
                        <a href="aervices-vertical.html"><?php echo $this->session->userdata('username_operator'); ?></a>
                    </li>
                </ul><!-- .breadcrumbs end -->

            </article> <!-- .page-title end -->

            <!-- #content-wrapper start -->
            <div id="content-wrapper">

                <!-- .container_12 start -->
                <section class="container_12">

                    <ul class=" grid_4 tabs vertical">
                        <li class="active">
                            <a href="#tab1">
                                <div class="service-info">
                                    <div class="service-info-icon">
                                        <i class="service-icon icon-users"></i>
                                    </div>
                                    <div class="service-info-title">
                                        <h6>Customer</h6>
                                        <span>Pengaturan data customer</span>  
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="">
                            <a href="#tab2">
                                <div class="service-info">
                                    <div class="service-info-icon">
                                        <i class="service-icon icon-write"></i>
                                    </div>

                                    <div class="service-info-title">
                                        <h6>Reservasi</h6>

                                        <span>Pengaturan data pemesanan</span>   
                                    </div>
                                </div>
                            </a>
                        </li>
						
						
                        <li>
                            <a href="#tab3">
                                <div class="service-info">
                                    <div class="service-info-icon">
                                        <i class="service-icon icon-users2"></i>
                                    </div>

                                    <div class="service-info-title">
                                        <h6>Pelayan</h6>
                                        <span>Pengaturan data pelayan</span>  
                                    </div>
                                </div>
                            </a>
                        </li>
						
                        <li class="">
                            <a href="#tab4">
                                <div class="service-info">
                                    <div class="service-info-icon">
                                        <i class="service-icon icon-mac"></i>
                                    </div>

                                    <div class="service-info-title">
                                        <h6>Daftar Presensi</h6>
                                        <span>Pengaturan data presensi pelayan</span> 
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="">
                            <a href="#tab5">
                                <div class="service-info">
                                    <div class="service-info-icon">
                                        <i class="service-icon icon-grid"></i>
                                    </div>

                                    <div class="service-info-title">
                                        <h6>Meja Restoran</h6>
                                        <span>Pengaturan detail data meja</span> 
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <!-- tabs content -->
                    <section class="grid_8 tab-content-wrap vertical">

                        <!-- tab1 content start -->
                        <div id="tab1" class="tab-content">
                            <section class="section-title">
                                <h4>LIST Customer</h4>
                            </section>
						<IFRAME SRC=<?php echo base_url('admin/main/customer');?> WIDTH=610 Height=500></IFRAME>

                        </div><!-- tab1 content end -->

                        <!-- tab2 content start -->
                        <div id="tab2" class="tab-content">
                            <section class="section-title">
                                <h4>LIST PESANAN</h4>
                            </section>

							<IFRAME SRC=<?php echo base_url('admin/main/pesanan');?> WIDTH=610 Height=500></IFRAME>
                            
                        </div><!-- tab2 content end -->

                        <!-- tab3 content start -->
                        <div id="tab3" class="tab-content">
                            <section class="section-title">
                                <h4>LIST PELAYAN</h4>
                            </section>     

							<IFRAME SRC=<?php echo base_url('admin/main/pelayan');?> WIDTH=610 Height=500></IFRAME>
                            
                        </div><!-- tab3 content end -->

                        <!-- tab4 content start -->
                        <div id="tab4" class="tab-content">
                            <section class="section-title">
                                <h4>PRESENSI PELAYAN</h4>
                            </section>

                            <IFRAME SRC=<?php echo base_url('admin/main/presensi');?> WIDTH=610 Height=500></IFRAME>
							
                        </div><!-- tab4 content end -->

                        <!-- tab3 content start -->
                        <div id="tab5" class="tab-content">
                            <article class="grid_8 alpha omega">
                                <section class="section-title">
                                    <h4>worldwide support</h4>
                                </section>

                                <IFRAME SRC=<?php echo base_url('admin/main/meja');?> WIDTH=610 Height=500></IFRAME>
                        </div><!-- tab5 content end -->
                    </section><!-- tabs content end -->


                </section><!-- .container_12 end -->

            </div><!-- #content-wrapper end -->

            <!-- #footer-wrapper start -->
            <div id="footer-wrapper" class="clearfix">

                <!-- #tweet-scroll-wrapper start -->
                <article id="tweet-sroll-wrapper" class="clearfix">
                    <div class="tweet-icon"></div>

                    <div class="tweets-list-container"></div>
                </article><!-- #tweet-scroll-wrapper end -->
<?php
$this->load->view('backend/tema/footer');

?>