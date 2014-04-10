<?php
$this->load->view('frontend/tema/header');

?>
	

            <!-- .page-title start -->
            <article class="page-title">

                <section class="title">
                    <h1>Oops, sepertinya <span class="text-color">Anda tersesat</span></h1>
                </section> 

                <!-- .breadcrumbs start -->
                <ul class="breadcrumbs">
                    <li>
                        You are here:
                    </li>
                    <li class="home-icon">
                        <a href="index.html">/</a>
                    </li>
                    <li class="active">
                        <a href="404.html">404</a>
                    </li>
                </ul><!-- .breadcrumbs end -->

            </article> <!-- .page-title end -->

            <!-- #content-wrapper start -->
            <div id="content-wrapper">
                <section class="container_12">
                    <article class="grid_12 error-page">
                        <img src="<?php echo base_url();?>assets/img/404.png" alt="error" />
                        <h1><span class="text-color">//</span> page not found <span class="text-color">\\</span></h1>
                        <p>
                            Maaf halaman yang Anda maksudkan tidak ditemukan<br />
                            Hubungi contact person jika Anda merasa yakin akan keberadaan halaman ini.
                        </p>
                        
                        <a class="btn-medium" href="<?php echo site_url();?>">
                            <span>Kembali</span>
                        </a>
                    </article>
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
$this->load->view('frontend/tema/footer');

?>