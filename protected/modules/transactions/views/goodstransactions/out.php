<?php
$this->breadcrumbs=array(
	'Goodstransactions',
);

Yii::app()->clientScript->registerScript('add-trans-goods-in', "
var no = 0;
$('.button_ok').click(function(){
if(document.getElementById('Goods_goods_name').value == '' || document.getElementById('order_name').value == '' || document.getElementById('qty').value == '' || document.getElementById('desc').value == ''){
	alert('Please check Your Input','Message');
}else{ 
	$.ajax({
		type : 'POST',
		dataType : 'json',
		cache : false,
		url : '".Yii::app()->request->baseUrl."/index.php/transactions/goodstransactions/addtrans',
		data : {
			goods_id : document.getElementById('goods_id').value,
			qty :  document.getElementById('qty').value,
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
	        		+document.getElementById('order_name').value+
	        		'</td><td>'
	        		+document.getElementById('qty').value+
	        		'<input type=\"hidden\" name=\"GoodsTransaction['+no+'][goods_id]\" value=\"'+data.goods_id+'\">'+
	        		'<input type=\"hidden\" name=\"GoodsTransaction['+no+'][order_name]\" value=\"'+document.getElementById('order_name').value+'\">'+
	        		'<input type=\"hidden\" name=\"GoodsTransaction['+no+'][qty]\" value=\"'+document.getElementById('qty').value+'\">'+
	        		'<input type=\"hidden\" name=\"GoodsTransaction['+no+'][decsription]\" value=\"'+document.getElementById('desc').value+'\">'+
	        		'</td></td><td><a href=\"#\" onclick=\"$(\'#trans_'+no+'\').remove();\">remove</a></td></tr>');
	        		  document.getElementById('Goods_goods_name').value = '';
	        		  document.getElementById('order_name').value = '';
	        		  document.getElementById('qty').value = '';
	        		  document.getElementById('desc').value = '';
                       	
			no++; 	
	        		  
			return false;
		}
	});
 }
});");
?>
<!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">Goods Out</h1>
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
		<div class="portlet-header">Form Goods Out</div>
		<div class="portlet-content">
			<?php echo $this->renderPartial('_outfrom'); ?>
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
        <div class="portlet-header"><img src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> Table List Goods Out</div>
		<div class="portlet-content">
		<?php echo Yii::app()->user->getFlash('error');?> 
        <form method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="2%" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()" /></th>
                <th width="55%" scope="col">Components Name</th>
                <th width="11%" scope="col">Type Order</th>
                <th width="5%" scope="col">Qty</th>
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

