<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>contact - Stones Today</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/mobile.css">
	<script src="<?php echo base_url();?>assets/js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="<?php echo base_url();?>" class="logo"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></a>
				<ul id="navigation">
					<li>
						<a href="<?php echo base_url();?>">BERANDA</a>
					</li>
					<li class="menu">
						<a href="<?php echo base_url();?>project">PROJECTS</a>
					</li>
					<li>
						<a href="<?php echo base_url();?>about">TENTANG</a>
					</li>
					<li class="selected">
						<a href="<?php echo base_url();?>contact">KONTAK</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="body">
			<div class="header">
				<div class="contact">
					<h1>KONTAK</h1>
					<h2>JANGAN RAGU UNTUK HUBUNGI KAMI</h2>
					<form action="<?php echo site_url(); ?>email" method="post" >
						<input type="text" name="nama" value="Nama" onblur="this.value=!this.value?'Nama':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="text" name="email" value="Email" onblur="this.value=!this.value?'Email':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="text" name="subjek" value="Subjek" onblur="this.value=!this.value?'Subjek':this.value;" onfocus="this.select()" onclick="this.value='';">
						<textarea name="pesan" cols="50" rows="7" onblur="this.value=!this.value?'Subjek':this.value;" onfocus="this.select()" onclick="this.value='';">Pesan</textarea>
						<input type="submit" value="Kirim" id="submit">
					</form>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="connect">
				<div>
					<h1>FOLLOW KAMI</h1>
					<div>
						<a href="https://web.facebook.com/affrorpl1/" target="_blank" class="facebook">facebook</a>
						<a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus">googleplus</a>
					</div>
				</div>
			</div>
			<div class="footnote">
				<div>
					<p>&copy; 2016 BY AFFRO | REKAYASA PERANGKAT LUNAK 1</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
