<?php
$this->load->view('frontend/tema/header');

?>
	
   
            <!-- .page-title start -->
            <article class="page-title">

                <section class="title">
                    <h1>A bit more simple <span class="text-color">services page</span></h1>
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
                        <a href="services-simple.html">List Pesanan</a>
                    </li>
                </ul><!-- .breadcrumbs end -->

            </article> <!-- .page-title end -->

            <!-- #content-wrapper start -->
            <div id="content-wrapper">

                <!-- .container_12 start -->
                <section class="container_12">

                    <article class="grid_12">
                        <section class="section-title">
                            <h4>
                                <span class="text-color">Reservasi </span>Saya
                            </h4>
                        </section>
				 <center><form action="cek_kode" method="post">
					  
				<strong>
				<label for="kode">Masukkan kode reservasi Anda</label></strong><br>
				<input name="kode" id="kode" placeholder="Kode" style="width: 50%;" required><br>
				<p><button name="send" type="submit" value="1">Submit</button></p>
				</form></center>
						
						<br><br>
						
						<?php if ($list ==1) { ?>
						<table class="alt">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>No Meja</th>
						<th>Jam mulai</th>
						<th>Jam selesai</th>
					</tr>
					<?php 
					$i=1;
					foreach ($cek->result() as $cek ){ ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $cek->nama_customer; ?></td>
						<td><?php echo $cek->id_meja; ?></td>
						<td><?php echo $cek->jam_mulai; ?></td>
						<td><?php echo $cek->jam_selesai; ?></td>
					</tr>
					<?php $i++; } ?>
				</table>
						
						<?php } else if ($list==2) { ?>
						
						<center><h3>Anda tidak memiliki pesanan aktif dengan kode tersebut</h3></center>
						
						<?php }?>
						
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