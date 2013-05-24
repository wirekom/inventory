<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>css/960.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>css/text.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>css/blue.css" />
	<link type="text/css" href="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>css/smoothness/ui.css" rel="stylesheet" />
	
	<script type="text/javascript">
	if (typeof jQuery == 'undefined') {
		 document.write('<script src="<?php echo Yii::app()->request->baseUrl."/assets/default" ?>/js/jquery.min.js" type="text/javascript"><\/script>');
	}
	</script>  
   
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>js/blend/jquery.blend.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>js/ui.core.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>js/ui.sortable.js"></script>    
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>js/ui.dialog.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>js/ui.datepicker.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>js/effects.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>js/flot/jquery.flot.pack.js"></script>
    <!--[if IE]>
    <script language="javascript" type="text/javascript" src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>js/flot/excanvas.pack.js"></script>
    <![endif]-->
	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>css/iefix.css" />
	<script src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>js/pngfix.js"></script>
    <script>
        DD_belatedPNG.fix('#menu ul li a span span');
    </script>        
    <![endif]-->
    <script id="source" language="javascript" type="text/javascript" src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>js/graphs.js"></script>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
<!-- HIDDEN COLOR CHANGER -->      
      <div style="position:relative;">
      	<div id="colorchanger">
        	<a href="dashboard_red.html"><span class="redtheme">Red Theme</span></a>
            <a href="dashboard.html"><span class="bluetheme">Blue Theme</span></a>
            <a href="dashboard_green.html"><span class="greentheme">Green Theme</span></a>
        </div>
      </div>
  	<!--LOGO-->
	<div class="grid_8" id="logo">Profile Admin - Website Administration</div>
    <div class="grid_8">
<!-- USER TOOLS START -->
      <div id="user_tools">
	  <span>
	  <a href="#" class="mail">(1)</a> 
	  Welcome <a href="#">Admin Username</a>  
	  |  <a class="dropdown" href="#">Change Theme</a>  
	  |  <!--<a href="#">Logout</a>-->
	  <?php $this->widget('zii.widgets.CMenu',array(
			//'linkLabelWrapper'=>'span',
			'htmlOptions' => array('class'=>'log'),
            'items'=>array(
					array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
            )); ?>
	  </span></div>
    </div>
<!-- USER TOOLS END -->    
<?php include '_menu.php';?>

<?php echo $content;?>
</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
Website Administration by <a href="http://www.webgurus.biz/">WebGurus</a></div>
<!-- FOOTER END -->
</body>

<!-- Mirrored from www.webgurus.biz/adminskin2/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 29 Aug 2012 16:39:12 GMT -->
</html>
