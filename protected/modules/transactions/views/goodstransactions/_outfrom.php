<div class="form">

	<div class="row">
	<label>Goods</label>
	<?php 
		$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model' => new Goods(),			
            'attribute' => 'goods_name',		
			'sourceUrl'=>array('/transactions/goodstransactions/cekgoods'),
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

	<div class="row">	 
		<label>Type Order</label>
		<?php echo CHtml::dropDownList('order_name','',CHtml::listData(OrderType::model()->findAll(),'id','order_name'),array('empty'=>'-- select Order Type --'))?>
	</div>
	
	<div class="row">	 
		<label>Warehouse From</label>
		<?php echo CHtml::dropDownList('warehouse_from','',CHtml::listData(Warehouse::model()->findAll(),'id','name_warehouse'),array('empty'=>'-- select warehouse --'))?>
	</div>
	
	<div class="row">	 
		<label>Warehouse To</label>
		<?php echo CHtml::dropDownList('warehouse_to','',CHtml::listData(Warehouse::model()->findAll(),'id','name_warehouse'),array('empty'=>'-- select warehouse --'))?>
	</div>
	
	<div class="row">
	<label>Qty</label>
	<input type="text" id="qty" name="qty" size="8">
	</div>
</div>		