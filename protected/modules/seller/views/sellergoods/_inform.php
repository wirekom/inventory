<div class="form">

	<div class="row">
	<label>Goods Name</label>
	<?php 
		$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model' => new Goods(),			
            'attribute' => 'goods_name',		
			'sourceUrl'=>array('/seller/sellergoods/cekgoods'),
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
	<label>Sender Name</label>
		<input type="text" id="sender_name" name="sender_name" size="20">
	</div>

	<div class="row">	 
		<label>Type Order</label><br>
		<?php echo CHtml::dropDownList('type_order','',CHtml::listData(OrderType::model()->findAll(),'id','order_name'),array('empty'=>'-- select order type --'))?>
	</div><br>

</div>		