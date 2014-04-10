<?php
$this->load->view('frontend/tema/header');

?>
	<section class="content">
		<section class="columns e404">
			<article class="col2">
				<p class="e404">404</p>
				<p>Ups, Halaman yang Anda maksud tidak ditemukan!</p>
			</article><article class="col2">
				<p>Tidak dapat menemukan halaman tersebut?<br>Silakan cari melalui formulir di bawah ini</p>
				<form method="get" class="searchform" action="/404.html">
					<fieldset>
						<input type="text" value="" name="s" id="s" placeholder="Search"><button type="submit" id="searchsubmit" value="Search"></button>
					</fieldset>
				</form>
				<p><span>atau</span></p>
				<p><a href="<?php echo base_url();?>" class="btn large orange">Kembali ke halaman muka</a></p>
			</article>
		</section>
	</section>

<?php
$this->load->view('frontend/tema/footer');

?>