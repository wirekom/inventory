<div class="form">

	<div class="row">
	<label>Goods Name</label>
	<?php 
		$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model' => new Goods(),			
            'attribute' => 'goods_name',		
			'sourceUrl'=>array('/production/production/cekgoods'),
		    // additional javascript options for the autocomplete plugin
		    'options' => array(
                'minLength' => '1',
                'search' => 'js:function(event, ui){
                        $(\'#hospital_id\').val(-1);
                       }',
                        'select' => 'js:function(event, ui){
                        	document.getElementById(\'goods_id\').value = ui.item.id;
                        }',
                    ),
                    'htmlOptions' => array(
                        'style' => 'height:25px;width:200px;padding:0px 5px;',
                        'class' => 'mf'
            ),		    
		    'htmlOptions'=>array(
		        'style'=>'width:50%;', 
		    ),
		));
		?>
		<input type="hidden" name="goods_id" id="goods_id">
		</div>
	
	<!--div class="row">
	<label>Component Name</label>
	<?php 
		$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model' => new Components(),			
            'attribute' => 'component_name',		
			'sourceUrl'=>array('/transactions/componentstransaction/cekcomponents'),
		    // additional javascript options for the autocomplete plugin
		    'options' => array(
                'minLength' => '1',
                'search' => 'js:function(event, ui){
                        $(\'#hospital_id\').val(-1);
                       }',
                        'select' => 'js:function(event, ui){
                        	document.getElementById(\'keterangan\').innerHTML = \'Code : \'+ui.item.code;
                        	document.getElementById(\'components_id\').value = ui.item.id;
                        }',
                    ),
                    'htmlOptions' => array(
                        'style' => 'height:25px;width:200px;padding:0px 5px;',
                        'class' => 'mf'
            ),		    
		    'htmlOptions'=>array(
		        'style'=>'width:50%;', 
		    ),
		));
		?>
		<input type="hidden" name="components_id" id="components_id">
		</div>
	
	<div class="row">
	<b id="keterangan">
	</b></div>-->	
	
	<div class="row">
	<label>Components Qty</label>
		<input type="text" id="components_qty" name="components_qty" size="20">
	</div>

	<div class="row">	 
		<label>Warehouse</label>
		<?php echo CHtml::dropDownList('warehouse_id','',CHtml::listData(Warehouse::model()->findAll(),'id','name_warehouse'),array('empty'=>'-- select warehouse --'))?>
	</div>	
	
	<!--div class="row">	 
		<label>Warehouse To</label>
		<?php echo CHtml::dropDownList('warehouse_to','',CHtml::listData(Warehouse::model()->findAll(),'id','name_warehouse'),array('empty'=>'-- select warehouse --'))?>
	</div>-->
	
</div>		