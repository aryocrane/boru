<!DOCTYPE html>

<html lang="en">
<head>
   <meta charset="utf-8">
   <title>XL DS MESSAGING WEBTOOL</title>
	<link rel=icon type=image/ico href='<?php echo base_url() ?>images/favicon.ico'  />
   <link rel=stylesheet type=text/css href='<?php echo base_url()?>asset/login.css' />
</head>
<body>
<section class="container">
<div class="login">
<h1>XL DS MESSAGING WEBTOOL</h1>
<?php echo form_open('admin'); ?>
<p><?php echo form_input('user_name', set_value('user_name'), 'id="user_name" placeholder="Username"'); ?></p>
<p><?php echo form_password('password', '', 'id="password" placeholder="Password"'); ?></p>
<p><?php echo form_submit('submit', 'Login'); ?></p>
<?php echo form_close(); ?>
</div>
</section>
<?php echo validation_errors(); ?>
<section class="about">
<p class="about-author">
  Vimanalogy &copy; 2017<br>  
</p>
</section>
<!--<div class='bg'><img src='<?php //echo base_url() ?>assets/themes/images/wordificator.png'></div>-->
</body>
</html>	

