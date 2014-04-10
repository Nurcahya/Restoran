<?php
$this->load->view('frontend/tema/header');

?>
			
				<script type="text/javascript" language="JavaScript">
		<!--
		function checkCheckBoxes(theForm) {
			if (
			theForm.meja.checked == false ) 
			{
				alert ('You didn\'t choose any of the checkboxes!');
				return false;
			} else { 	
				return true;
			}
		}
		//-->
		</script> 
   <!-- .page-title start -->
            <article class="page-title">

                <section class="title">
                    <h1>SELAMAT DATANG DI <span class="text-color"><BR>POP STEAK RESERVATION POINT</span></h1>
                </section> 

                <!-- .breadcrumbs start -->
                <ul class="breadcrumbs">
                    <li>
                        Anda di sini:
                    </li>
                    <li class="home-icon">
                        <a href="index.html">/</a>
                    </li>
                    <li class="active">
                        <a href="about.html">About alternative</a>
                    </li>
                </ul><!-- .breadcrumbs end -->

            </article> <!-- .page-title end -->

            <!-- #content-wrapper start -->
            <div id="content-wrapper">

                <!-- .container_12 start -->
                <section class="container_12">

                    <!-- .grid_6 start -->
                    <article class="grid_8">
                        <section class="section-title">
                            <h4>Denah meja Pop Steak</h4>
                        </section>

                        <img src="<?php echo base_url();?>assets/img/denah.png" alt="image" style="width:56%;" class="float-left" />

                      <form action="home/menu" method="post" onsubmit="return checkCheckBoxes(this);">
						
						<?php 
						$jum = 1;
						foreach ($meja->result() as $meja) { ?>
						<input type="checkbox" value="<?php echo $meja->id_meja;?>" name="meja[<?php echo $jum; ?>]"><?php echo $meja->no_meja;?> (Kapasitas <?php echo $meja->kapasitas;?> Orang)<br/>
						<?php $jum++; } ?>
						<input type="hidden" name="jumMeja" value="<?php echo $jum-1; ?>" />
                    </article><!-- grid_6 end -->  

                    <!-- .grid_4 start -->
                    <article class="grid_4 skills-bar">
                        <section class="section-title">
                            <h4>Detail reservasi</h4>
                        </section>

				<strong>
				<label for="nama">Nama</label></strong><br>
				<input name="nama" id="nama" placeholder="Nama" style="width: 92%;" required><br>
				<strong>
				<label for="alamat">Alamat</label></strong><br>
				<input name="alamat" id="alamat" placeholder="Alamat" style="width: 92%;" required><br>
				<strong>
				<label for="email">Email</label></strong><br>
				<input name="email" id="email" placeholder="Email" type="email" style="width: 92%;" required><br>
				<strong>
				<label for="telepon">Nomor Telepon</label></strong><br>
				<input name="telepon" id="telepon" placeholder="Nomor Telepon" style="width: 92%;" required><br>
				<strong>
				<label for="jam_mulai">Jam pesan</label></strong><br>
				<input readonly id="datetimepicker" type="text" name="jam_mulai" id="jam_mulai" required><br>				
				<strong>
				<label for="jam_selesai">Jam selesai</label></strong><br>
				<input readonly id="datetimepicker2" type="text" name="jam_selesai" id="jam_selesai" required><br>
				
				<p><button name="send" type="submit" value="1" >Reserve</button></p>
			</form>
		
		
	
				
                    </article><!-- .grid_4 end -->

                    <!-- .grid_12 .jcarousellite start -->
                    <article class="grid_12 clients clearfix">
                        <section class="section-title">
                            <h4>menu kami</h4>

                            <ul class="clients-navigation">
                                <li>
                                    <a class="clients-nav prev" href="#"></a> 
                                </li>

                                <li>
                                    <a class="clients-nav next" href="#"></a> 
                                </li>
                            </ul>  
                        </section>

                        <ul id="client-carousel" class="carousel-li">
                            <li>
                                <a href="">
                                    <img class="greyScale" src="<?php echo base_url();?>assets/img/slider/st (1).jpg" alt="client logo" />
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <img class="greyScale" src="<?php echo base_url();?>assets/img/slider/st (2).jpg" alt="client logo" />
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <img class="greyScale" src="<?php echo base_url();?>assets/img/slider/st (3).jpg" alt="client logo" />
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <img class="greyScale" src="<?php echo base_url();?>assets/img/slider/st (4).jpg" alt="client logo" />
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <img class="greyScale" src="<?php echo base_url();?>assets/img/slider/st (5).jpg" alt="client logo" />
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <img class="greyScale" src="<?php echo base_url();?>assets/img/slider/st (6).jpg" alt="client logo" />
                                </a>
                            </li>
                        </ul>

                    </article><!-- .grid_12 .jcarousellite end -->

                </section><!-- .container_12 end -->

            </div><!-- #content-wrapper end -->

            <!-- #footer-wrapper start -->
            <div id="footer-wrapper" class="clearfix">

                <!-- #tweet-scroll-wrapper start -->
                <article id="tweet-sroll-wrapper" class="clearfix">
                    <div class="tweet-icon"></div>

                      <div class="tweets-list-container"><h6>follow us @popsteakpasta</h6></div>
                </article><!-- #tweet-scroll-wrapper end -->

                
<?php
$this->load->view('frontend/tema/footer');

?>