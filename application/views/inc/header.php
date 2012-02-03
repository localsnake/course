<head>
	<base href="<?php echo base_url();?>">
	<title><?php echo $title;?></title>
	<link rel="icon" href="./images/localsnake.ico" type="image/x-icon"/>
	<script type="text/javascript" src="./lib/jquery.js"></script>
	<?php if(isset($css)): ?>
	<link rel="stylesheet" type="text/css" href="./css/<?php echo $css; ?>" media="screen"/>
	<?endif; ?>
</head>
