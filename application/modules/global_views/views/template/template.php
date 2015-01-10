<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $title;?></title>
    <base href="<?php echo base_url();?>global_views/" />
    <meta name="keywords" content="Pathway Program, Universities, International Education" />
    <meta name="author" content="Eca Global International University">
    <meta name="description" content="International Unicersity Pathway Program, APIC International College"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--css files-->
    <link rel="stylesheet" type="text/css" href="assets/css/dafault.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/additional.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.1.1/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.1.1/css/bootstrap-theme.css" />
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.0.3/css/font-awesome.min.css" />
    <link rel='stylesheet' id='camera-css'  href='assets/plugin/css/camera.css' type='text/css' media='all'>
    <link rel='stylesheet' id='camera-css'  href='assets/css/custom.css' type='text/css' media='all'>
    <!--js files-->
    <script type="text/javascript" src="assets/js/core/core.js"></script>
    <script type="text/javascript" src="assets/bootstrap-3.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/scripts/global_config.js"></script>
    <script type="text/javascript" src="assets/plugin/unveil/jquery.unveil.min.js"></script>
    
    <?php echo $scripts;?> 
</head>
<body class="body">
    <div class="header">
        <?php $this->load->view($header);?>
    </div>

	<div class="content-view">
        <div class="main-content">
			<?php $this->load->view($content);?>
       	</div>
    </div>

    <div class="footer">
        <?php $this->load->view($footer);?>
    </div>
    <script type="text/javascript" src="assets/js/scripts/prototype_settings.js"></script>
    <script type="text/javascript" src="assets/js/scripts/scroll.js"></script>
</body>
</html>