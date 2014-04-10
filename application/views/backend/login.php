<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Box HTML Code - www.PSDGraphics.com</title>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" />  
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/blue.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/pixons/style.css" />  
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/nivo-slider.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/service-icons/style.css" />
<link href="<?php echo base_url();?>assets/css/login-box.css" rel="stylesheet" type="text/css" />
</head>

<body>


<center>

<?php if($this->session->userdata('flag') == '1' ){ ?>
				<section class="error-box"><p style="color:black;">Email atau password Anda salah!</p></section>
		<?php } ?>

<div style="padding: 100px 0 0 0;">


<div id="login-box">

<H2>LOGIN ADMIN</H2>
Anda akan masuk ke halaman manajemen restoran. Masukkan username dan password Anda.
<br />
<br />
<form action="login/ceklogin" method="post">
<div id="login-box-name" style="margin-top:20px;">Username:</div><div id="login-box-field" style="margin-top:20px;"><input name="uname" class="form-login" title="uname"  size="30" maxlength="2048" required/></div>
<div id="login-box-name">Password:</div><div id="login-box-field"><input name="password" type="password" class="form-login" title="Password"  size="30" maxlength="2048" required/></div>
<br />
<br />
<button name="send" type="submit" value="1">Log In</button>
</form>
</div>
<?php $sesi = array(	'flag' 	=> '0');
			$this->session->set_userdata($sesi);
			?>
</div></center>













</body>
</html>
