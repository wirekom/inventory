<?php $this->beginContent('//layouts/main'); ?>
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         <div class="container">
         
		<?php
		
		$ex =  Yii::app()->request->getUrl(true); 
		$this->menu=array( 
			array('label'=>'<span>Incoming Components</span>', 'url'=>array('/transactions/componentstransaction/create'), 'linkOptions' => array('class'=>(strpos($ex,'/transactions/componentstransaction'))?"current":"")),
			array('label'=>'<span>Components Out</span>', 'url'=>array('/transactions/componentsout'), 'linkOptions' => array('class'=>(strpos($ex,'/transactions/componentsout'))?"current":"")),
			array('label'=>'<span>Incoming Goods</span>', 'url'=>array('/transactions/goodstransactions/in'), 'linkOptions' => array('class'=>(strpos($ex,'/transactions/goodstransactions/in'))?"current":"")),
			array('label'=>'<span>Goods Mutation</span>', 'url'=>array('/transactions/goodstransactions/out'), 'linkOptions' => array('class'=>(strpos($ex,'/transactions/goodstransactions/out'))?"current":"")),
			array('label'=>'<span>Opnam Components</span>', 'url'=>array('/transactions/opnamcomponents/create'), 'linkOptions' => array('class'=>(strpos($ex,'/transactions/opnamcomponents'))?"current":"")),
			array('label'=>'<span>Opnam Goods</span>', 'url'=>array('/transactions/opnamgoods/create'), 'linkOptions' => array('class'=>(strpos($ex,'/transactions/opnamgoods'))?"current":"")),
		);
		
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'encodeLabel'=>false,
			));
		?></div>
    </div>
<!-- TABS END -->    
</div>
<!--<!-- HIDDEN SUBMENU START -->
<!--<div class="grid_16" id="hidden_submenu">
	  <ul class="more_menu">
		<li><a href="#">More link 1</a></li>
		<li><a href="#">More link 2</a></li>  
	    <li><a href="#">More link 3</a></li>    
        <li><a href="#">More link 4</a></li>                               
      </ul>
	  <ul class="more_menu">
		<li><a href="#">More link 5</a></li>
		<li><a href="#">More link 6</a></li>  
	    <li><a href="#">More link 7</a></li> 
        <li><a href="#">More link 8</a></li>                                  
      </ul>
	  <ul class="more_menu">
		<li><a href="#">More link 9</a></li>
		<li><a href="#">More link 10</a></li>  
	    <li><a href="#">More link 11</a></li>  
        <li><a href="#">More link 12</a></li>                                 
      </ul>            
  </div>
-->
<!-- HIDDEN SUBMENU END -->  
<!-- CONTENT START -->
<div class="grid_16" id="content">
<?php echo $content;?>
</div>
<div class="clear"> </div>

<?php $this->endContent(); ?>