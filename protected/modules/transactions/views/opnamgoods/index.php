<?php
$this->breadcrumbs=array(
	'Opnam Goods',
);

Yii::app()->clientScript->registerScript('add-trans-goods-in', "
var no = 0;
$('.button_ok').click(function(){
if(document.getElementById('Goods_goods_name').value == '' || document.getElementById('warehouse_id').value == '' || document.getElementById('stock_goods').value == '' || document.getElementById('office').value == '' || document.getElementById('desc').value == ''){
	alert('Please check Your Input','Message');
}else{ 
	$.ajax({
		type : 'POST',
		dataType : 'json',
		cache : false,
		url : '".Yii::app()->request->baseUrl."/index.php/transactions/opnamgoods/addtrans',
		data : {
			goods_id : document.getElementById('goods_id').value,
		},
		beforeSend:function(){
			$('#loading').show();
		},
		complete:function(){
			$('#loading').hide();
		},
		success : function(data){
			$('#box-table-a > tbody:last').append('<tr id=\"trans_'+no+'\"><td><input type=\"checkbox\" name=\"cek_'+no+'\"></td><td>'
	        		+document.getElementById('Goods_goods_name').value+
	        		'</td><td>'
					+document.getElementById('warehouse_id').options[document.getElementById('warehouse_id').selectedIndex].text+
	        		'</td><td>'
					+document.getElementById('stock_goods').value+
	        		'</td><td>'
	        		+document.getElementById('office').value+
	        		'<input type=\"hidden\" name=\"OpnamGoods['+no+'][goods_id]\" value=\"'+data.goods_id+'\">'+
	        		'<input type=\"hidden\" name=\"OpnamGoods['+no+'][warehouse_id]\" value=\"'+document.getElementById('warehouse_id').value+'\">'+
	        		'<input type=\"hidden\" name=\"OpnamGoods['+no+'][stock_goods]\" value=\"'+document.getElementById('stock_goods').value+'\">'+
	        		'<input type=\"hidden\" name=\"OpnamGoods['+no+'][office]\" value=\"'+document.getElementById('office').value+'\">'+
	        		'<input type=\"hidden\" name=\"OpnamGoods['+no+'][decsription]\" value=\"'+document.getElementById('desc').value+'\">'+
	        		'</td><td><a href=\"#\" onclick=\"$(\'#trans_'+no+'\').remove();\">remove</a></td></tr>');
	        		  document.getElementById('Goods_goods_name').value = '';
	        		  document.getElementById('warehouse_id').value = '';
                      document.getElementById('stock_goods').value = '';
                      document.getElementById('office').value = '';
	        		  document.getElementById('desc').value = '';
	        		  document.getElementById('Goods_goods_name').focus();
                        	document.getElementById('warehouse_id').value = '';
                        	document.getElementById('stock_goods').value = '';
                        	document.getElementById('office').value = '';
                        	document.getElementById('keterangan').innerHTML = '<br><br>';
                        	document.getElementById('goods_id').value = '';
                       	
			no++; 	
	        		  
			return false;
		}
	});
 }
});");
?>
<!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">Opnam Goods</h1>
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
    <div id="portlets">
    <!-- FIRST SORTABLE COLUMN START -->
      <div class="column" id="left">
      <!--THIS IS A PORTLET-->
        <div class="portlet">
		<div class="portlet-header">Form Transaction</div>
		<div class="portlet-content">
			<?php echo $this->renderPartial('_inform'); ?>
		</div>
        </div>
      </div>
      <!-- FIRST SORTABLE COLUMN END -->
      <!-- SECOND SORTABLE COLUMN START -->
      <div class="column">
      <!--THIS IS A PORTLET-->        
      <div class="portlet">
		<div class="portlet-header"><img src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>images/icons/comments.gif" width="16" height="16" alt="Comments" />Description</div>

		<div class="portlet-content"><!--
         <p class="info" id="success"><span class="info_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elitLorem ipsum dolor sit amet, consectetuer adipiscing elitLorem ipsum dolor sit amet, consectetuer adipiscing elitLorem ipsum dolor sit amet, consectetuer adipiscing elit</span></p>
    <p class="info" id="error"><span class="info_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span></p>
    <p class="info" id="warning"><span class="info_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span></p>
	<p class="info" id="info"><span class="info_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span></p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit
        -->
        <p>Type your description here :</p>
        <textarea rows="6" cols="35" style="width:100%"id="desc"></textarea>	
		<?php echo Yii::app()->user->getFlash('success');?> 
        <div id="loading" style="display:none">Loading add to cart...</div>        
		<div class="row">
		<a class="button_ok" style="float:right;margin: 10px 10px 10px 10px;">
		<span>add to cart</span>
		</a>
		</div>
        </div>
       </div>    
                           
    </div>
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
    <div class="portlet">
        <div class="portlet-header"><img src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> Last Registered users Table Example</div>
		<div class="portlet-content">
		<?php echo Yii::app()->user->getFlash('error');?> 
        <form method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="2%" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()" /></th>
                <th width="55%" scope="col">Goods Name</th>
                <th width="11%" scope="col">Warehouse</th>
                <th width="15%" scope="col">Stock Goods</th>
                <th width="5%" scope="col">Office</th>
                <th width="2%" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
          
                <button type="submit" class="approve_inline" style="float:right;margin: 10px 10px 10px 10px; ">Commit Transaction</button>
        </form>
		</div>
      </div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
		
    <div class="clear"> </div>
<!-- END CONTENT-->    

