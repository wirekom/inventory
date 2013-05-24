<?php $this->beginContent('//layouts/main'); ?>
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         <div class="container">
		 <!-- MENU START -->
			<?php 
			$ex =  Yii::app()->request->getUrl(true); 
				if(!strpos($ex,'/master/user'))
				{
						$this->widget('zii.widgets.CMenu',array(
							'linkLabelWrapper'=>'span',
							'items'=>array(
								array('label'=>'Components', 'url'=>array('/master/components/'),'linkOptions'=>array('class'=>(strpos($ex,'/master/components/'))?"current":"")),
								array('label'=>'Component Suplier', 'url'=>array('/master/componentSuplier/'),'linkOptions'=>array('class'=>(strpos($ex,'/master/componentSuplier/'))?"current":"")),
								array('label'=>'Goods', 'url'=>array('/master/goods/'),'linkOptions'=>array('class'=>(strpos($ex,'/master/goods/'))?"current":"")),
								array('label'=>'Order Type', 'url'=>array('/master/ordertype/'),'linkOptions'=>array('class'=>(strpos($ex,'/master/ordertype/'))?"current":"")),
								array('label'=>'Piece', 'url'=>array('/master/piece/'),'linkOptions'=>array('class'=>(strpos($ex,'/master/piece/'))?"current":"")),
								array('label'=>'Suplier', 'url'=>array('/master/suplier/'),'linkOptions'=>array('class'=>(strpos($ex,'/master/suplier/'))?"current":"")),
								array('label'=>'Transaction Type', 'url'=>array('/master/transactiontype/'),'linkOptions'=>array('class'=>(strpos($ex,'/master/transactiontype/'))?"current":"")),
								array('label'=>'Warehouse', 'url'=>array('/master/warehouse/'),'linkOptions'=>array('class'=>(strpos($ex,'/master/warehouse/'))?"current":"")),
								),
						));
				}	
			?>
        </div>
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

<!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard"><?php echo $this->title?></h1>
    </div>
    <!--RIGHT TEXT/CALENDAR-->
    <div class="grid_6" id="eventbox">
    	<a href="#" class="inline_calendar">Clear All Transaction</a>
    	<div class="hidden_calendar"></div>
    </div>
    <!--RIGHT TEXT/CALENDAR END-->
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
<!--THIS IS A PORTLET-->        
      <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" id="portletkanan">
		<div class="portlet-header portlet-header ui-widget-header ui-corner-top"><img src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>images/icons/comments.gif" width="16" height="16" alt="Comments" />Operations</div>

		<div class="portlet-content">
			<?php
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'encodeLabel'=>false,
				'htmlOptions'=>array('class'=>'operations'),
			));
			?>
		</div>
       </div> 

		<?php echo $content;?>

</div>
<div class="clear"> </div>
<?php $this->endContent(); ?>