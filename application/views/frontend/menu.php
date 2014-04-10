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
                        <a href="services-simple.html">Menu Makanan</a>
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
                                Menu <span class="text-color">Makanan</span>
                            </h4>
                        </section>
				
				<form name="Form1" action="pesanmakanjuga" method="post" onsubmit="return checkCheckBoxes(this);">	
				<table class="alt">
					<tr>
						<th>No</th>
						<th>Gambar</th>
						<th>Makanan</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Pesan</th>
					</tr>
					<?php 
					$i=1;
					foreach ($menu->result() as $menu ){ ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $menu->nama_makanan; ?></td>
						<td><?php echo $menu->nama_makanan; ?></td>
						<td><?php echo $menu->harga; ?></td>
						<td><input type="number" name="jumlah[]" min="0"></td>
						<td><input type="checkbox" value="<?php echo $menu->id_makanan;?>" name="makanan[]"></td>
					</tr>
					<?php $i++; } ?>
				</table>		
				<input type="hidden" name="jumMenu" value="<?php echo $i-1; ?>" />
				<input type="hidden" name="nama" id="nama" value="<?php echo $nama; ?>">
				<input type="hidden" name="alamat" id="alamat" value="<?php echo $alamat; ?>">
				<input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
				<input type="hidden" name="telepon" id="telepon" value="<?php echo $telepon; ?>">
				<input type="hidden" name="jam_mulai" id="jam_mulai" value="<?php echo $jam_mulai; ?>">
				<input type="hidden" name="jam_selesai" id="jam_selesai" value="<?php echo $jam_selesai; ?>">
				<input type="hidden" name="jumMeja" id="jumMeja" value="<?php echo $jumMeja; ?>">
				<?php foreach ($meja as $meja) { ?>
				<input type="hidden" name="meja[]" value="<?php echo $meja; ?>">
				<?php } ?>
				<center><button name="send" type="submit" >Pesan</button></center>	
				</form>
				<br>
				<form action="pesan" method="post">				
				<input type="hidden" name="nama" id="nama" value="<?php echo $nama; ?>">
				<input type="hidden" name="alamat" id="alamat" value="<?php echo $alamat; ?>">
				<input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
				<input type="hidden" name="telepon" id="telepon" value="<?php echo $telepon; ?>">
				<input type="hidden" name="jam_mulai" id="jam_mulai" value="<?php echo $jam_mulai; ?>">
				<input type="hidden" name="jam_selesai" id="jam_selesai" value="<?php echo $jam_selesai; ?>">
				<input type="hidden" name="jumMeja" id="jumMeja" value="<?php echo $jumMeja; ?>">
				<?php foreach ($meja2 as $meja2) { ?>
				<input type="hidden" name="meja[]" value="<?php echo $meja2; ?>">
				<?php } ?>
				<center><button name="send" type="submit" >Skip</button></center>
				</form>		
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