<?php
$this->load->view('frontend/tema/header');

?>
	
   
            <!-- .page-title start -->
            <article class="page-title">

                <section class="title">
                    <h1>RESERVASI MEJA<span class="text-color"> POP STEAK</span></h1>
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
                        <a href="portfolio3.html">Portfolio single project</a>
                    </li>
                </ul><!-- .breadcrumbs end -->

            </article> <!-- .page-title end -->

            <!-- #content-wrapper start -->
            <div id="content-wrapper">
                <div class="container_12">
                    <article class="grid_8">
                       
                          
							
					   <h2>DETAIL RESERVASI</h2>
							<img src="<?php echo base_url();?>assets/img/done.jpg" style="width:7%;"/>
							Selamat! Anda telah melakukan pemesanan meja di POP STEAK. Berikut detail reservasi Anda.<br><br>
							
							<?php foreach ($reservasi->result() as $reservasi) { ?>
							
							<table style="width:100%;">
							<tr>
								<td>
									<ul class="arrow-list">
										<li>Nama	:  <h5><?php echo $reservasi->nama_customer;?> </h5></li>
										<li>Alamat	: <h5><?php echo $reservasi->alamat_customer;?> </h5> </li>
										<li>Telepon	: <h5><?php echo $reservasi->telepon_customer;?> </h5></li>
										
									</ul>
							</td>
							<td>
									<ul class="arrow-list">
										<li>Kode reservasi : <h5><?php echo $reservasi->kode_reservasi;?></h5></li>
										<li>Jam mulai: <h5><?php echo $reservasi->jam_mulai;?></h5></li>
										<li>Jam selesai : <h5><?php echo $reservasi->jam_selesai;?></h5></li>
									</ul>
							</td>
						</tr>
						</table>
						<?php } ?>
                    </article>

                    <article class="grid_4 portfolio-info">
                         <div class="section-title">
                            <h2>Pesan makanan disini? Bisa!</h2>
                        </div>
						<p>
                            Anda juga dapat langsung <strong>memesan menu makanan</strong> melalui <strong>POP STEAK Reservation Point</strong>.<br>Bila Anda tidak memesan sekarang, Anda dapat memesannya langsung pada saat Anda tiba di sini. 
                        </p>

                        <ul class=""></ul>

                        <a href="#" class="btn-medium">
                            <span>Pesan Makanan</span>
                        </a>
                    </article>
                </div>
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