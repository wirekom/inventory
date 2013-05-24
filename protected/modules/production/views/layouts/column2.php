<?php $this->beginContent('//layouts/main'); ?>
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         <div class="container">
         
		<?php
		
		$ex =  Yii::app()->request->getUrl(true); 
		$this->menu=array( 
			array('label'=>'<span>Production</span>', 'url'=>array('/production/production/create'), 'linkOptions' => array('class'=>(strpos($ex,'/production/production/create'))?"current":"")),
		);
		
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'encodeLabel'=>false,
			));
		?><!--
            <ul>
                      <li><a href="#" class="current"><span>Incoming Components</span></a></li>
                      <li><a href="forms.html"><span>Out</span></a></li>
                      <li><a href="#"><span>Submenu Link 3</span></a></li>
                      <li><a href="#"><span>Submenu Link 4</span></a></li>
                      <li><a href="#"><span>Submenu Link 5</span></a></li>
                      <li><a href="#"><span>Submenu Link 6</span></a></li>
                      <li><a href="#" class="more"><span>More Submenus</span></a></li>            
           </ul>
        --></div>
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