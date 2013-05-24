<div class="form">

	<div class="row">
	<label>Component Name</label>
	<?php 
		$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model' => new Components(),			
            'attribute' => 'component_name',		
			'sourceUrl'=>array('/seller/sellercomponents/cekcomponents'),
		    // additional javascript options for the autocomplete plugin
		    'options' => array(
                'minLength' => '1',
                'search' => 'js:function(event, ui){
                        $(\'#hospital_id\').val(-1);
                       }',
                        'select' => 'js:function(event, ui){
                        	document.getElementById(\'keterangan\').innerHTML = \'Code : \'+ui.item.code;
                        	document.getElementById(\'component_id\').value = ui.item.id;
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
		<input type="hidden" name="component_id" id="component_id">
		</div>
	
	<div class="row">
	<b id="keterangan">
	</b></div>	
	
	<div class="row">
	<label>Sender Name</label>
		<input type="text" id="sender_name" name="sender_name" size="20">
	</div>

	<div class="row">	 
		<label>Type Order</label><br>
		<?php echo CHtml::dropDownList('type_order','',CHtml::listData(OrderType::model()->findAll(),'id','order_name'),array('empty'=>'-- select order type --'))?>
	</div><br>

</div>		