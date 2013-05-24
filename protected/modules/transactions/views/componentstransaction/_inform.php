<div class="form">

	<div class="row">
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
	<label>Suplier</label>
	 
	<?php 
		$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model' => new Suplier(),			
            'attribute' => 'suplier_name',			
			'source'=>'js: function(request, response) {
                       $.ajax({
                           url: "'.$this->createUrl('/transactions/componentstransaction/ceksuplier').'",
                           dataType: "json",
                           data: {
                               term: request.term,
                               component_id: $("#component_id").val()
                           },
                           success: function (data) {
                               response(data);
                           }
                       })
                        }', 
			//'sourceUrl'=>array('/transactions/componentstransaction/ceksuplier'),
		    // additional javascript options for the autocomplete plugin
		    'options' => array(
                'minLength' => '1',
                'search' => 'js:function(event, ui){
                        $(\'#hospital_id\').val(-1);
                       }',
                        'select' => 'js:function(event, ui){
                        	var price=\'\';
                        	if(ui.item.price == \'0\' ){
                        		price=\'No Component\\\'s price recorded in data center for this suplier, please contact your division to add the price\';
                        	}else{
                        		price=\'Price : \'+ui.item.price+\'<br><br>\';
                        	}
                        	document.getElementById(\'keterangan-suplier\').innerHTML = price;
                        	document.getElementById(\'suplier_id\').value = ui.item.id;
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
		<input type="hidden" name="suplier_id" id="suplier_id">
	</div>
	<b id="keterangan-suplier">
	</b></div>

	<div class="row">	 
		<label>Warehouse</label><br>
		<?php echo CHtml::dropDownList('warehouse_from','',CHtml::listData(Warehouse::model()->findAll(),'id','name_warehouse'),array('empty'=>'-- select warehouse --'))?>
	</div>
	
	<!--div class="row">	 
		<label>Warehouse</label><br>
		<?php echo CHtml::dropDownList('warehouse_to','',CHtml::listData(Warehouse::model()->findAll(),'id','name_warehouse'),array('empty'=>'-- select warehouse --'))?>
	</div>-->
	
	<div class="row">
	<label>Qty</label>
	<input type="text" id="qty" name="qty" size="8">
	</div>
</div>		
