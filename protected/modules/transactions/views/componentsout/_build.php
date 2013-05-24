<div class="form">

	<div class="row">
	<label>For Goods : </label>
	<?php 
		//Yii::app()->clientscript->scriptMap['jquery.js'] = true;
		$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		    'model' => new Goods(),			
            'attribute' => 'goods_name',	
			'sourceUrl'=>array('/transactions/componentsout/cekgoods'),
		    // additional javascript options for the autocomplete plugin
		    'options' => array(
                'minLength' => '1',
                'select' => "js:function(event, ui){
                			$.ajax({
								type : 'POST',
								dataType : 'json',
								cache : false,
								url : '".Yii::app()->request->baseUrl."/index.php/transactions/componentsout/addbuild',
								data : {
									goods_id : ui.item.id,
								},
								beforeSend:function(){
									$('#loading').show();
								},
								complete:function(){
									$('#loading').hide();
								},
								success : function(data){
									data.forEach(function(value, index, ar){
																	
										$('#box-table-a > tbody:last').append('<tr id=\"trans_'+no+'\"><td><input type=\"checkbox\" name=\"cek_'+no+'\"></td><td>'
								        		+value.component_name+
								        		'</td><td>'
								        		+value.type+
												'</td><td>'
								        		+value.warehouse_from+
												'</td><td>'
								        		+value.warehouse_to+
								        		'</td><td>'
								        		+value.component_qty+
								        		'<input type=\"hidden\" name=\"TComponentsOut['+no+'][component_id]\" value=\"'+data.component_id+'\">'+
								        		'<input type=\"hidden\" name=\"TComponentsOut['+no+'][qty]\" value=\"'+value.component_qty+'\">'+
								        		'<input type=\"hidden\" name=\"TComponentsOut['+no+'][decsription]\" value=\"Builded '+document.getElementById('Goods_goods_name').value+'\">'+
								        		'<input type=\"hidden\" name=\"TComponentsOut['+no+'][warehouse_from]\" value=\"Builded '+document.getElementById('warehouse_from').value+'\">'+
								        		'<input type=\"hidden\" name=\"TComponentsOut['+no+'][warehouse_to]\" value=\"Builded '+document.getElementById('warehouse_to').value+'\">'+
								        		'<input type=\"hidden\" name=\"TComponentsOut['+no+'][transaction_type]\" value=\"1\">'+
								        		'</td></td><td><a href=\"#\" onclick=\"$(\'#trans_'+no+'\').remove();\">remove</a></td></tr>');
								        		  document.getElementById('Components_component_name').value = '';
								        		  document.getElementById('transaction_type').value = '';
								        		  document.getElementById('warehouse_from').value = '';
								        		  document.getElementById('warehouse_to').value = '';
								        		  document.getElementById('qty').value = '';
								        		  document.getElementById('desc').value = '';
								        		  document.getElementById('Goods_goods_name').value = '';
								        		  document.getElementById('Components_component_name').focus();
							                        	document.getElementById('keterangan').innerHTML = '<br><br>';
							                        	document.getElementById('component_id').value = '';
							                        	document.getElementById('warehouse_from').value = '';
							                        	document.getElementById('warehouse_to').value = '';
							                      $('#openbuilded').dialog(\"close\"); 	
										no++; 	
								        		  
										return false;
									});
								}
							});
                        }",
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
	<div id="loading" style="display:none;float:left;margin:10px">
	Loading...
	</div>
	<b id="keterangan">
	<br><br>
	</b></div>	
</div>		