<!doctype html>
<html>
<head>
	<title><?php echo $title_for_layout; ?> | Festival de Música Regional</title>
	
	<!-- Meta Tags -->
    <meta charset="utf-8" />    
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	
	<!-- Css -->
	<?php echo $this->Html->css(array('style.css', 'layout.css')); ?>

	<!-- JavaScript -->
	<?php echo $this->Html->script(array('jquery-1.4.2.min.js', 'cufon-yui.js', 'cufon-replace.js', 'Myriad_Pro_400.font.js', 'Myriad_Pro_600.font.js'));?>
</head>
   
<body id="page1">


<div id="header">
	<!-- .container -->
	<div class="container">
		<?php echo $this->element('logo'); ?>
		<?php echo $this->element('menu'); ?>
	
		<!-- .intro-text -->
		<div class="intro-text">			
			<p><?php echo $content_for_layout;  ?></p>	
		</div>
		<!-- /.intro-text -->
		
	</div>
	<!-- /.container -->
</div>

<!-- footer -->
<div id="footer">	
	<div class="container">
		<?php echo $this->element('footer', array('copyryght' => 'Desenvolvedor Vanderli','social' => true,'cache' => '+3 hours')); ?>
	</div>
</div>
<!-- /footer -->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>