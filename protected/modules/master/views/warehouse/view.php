<?php
$this->breadcrumbs=array(
	'Warehouses'=>array('index'),
	$model->id,
);

$this->title="View Warehouse";
$this->menu=array(
	array('label'=>'Create Transaction Type', 'url'=>array('create')),
	array('label'=>'Update Transaction Type', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Transaction Type', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transaction Type', 'url'=>array('index')),
);
?>

    <!-- #PORTLETS START -->
    <div id="portlets">
    <!-- FIRST SORTABLE COLUMN START -->
      <div class="column" id="left">
      <!--THIS IS A PORTLET-->
        <div class="portlet">
		<div class="portlet-header">View Warehouse #<?php echo $model->id; ?></div>
		<div class="portlet-content">
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'attributes'=>array(
					'id',
					'name_warehouse',
					'address',
				),
			)); ?>
		</div>
        </div>
      </div>
      <!-- FIRST SORTABLE COLUMN END -->
      <!-- SECOND SORTABLE COLUMN START -->
      <div class="column">
                          
    </div>
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
    <div class="portlet">
       <div class="portlet-header fixed"><img src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>images/icons/transaction.gif" alt="Latest Registered Users" /> Table List Components</div>
		<div class="portlet-content nopadding">
        <form action="#" method="post">
			<!--?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'warehouse-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
					'columns'=>array(
						array(
			            	'header'=>'No',
			            	'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
							'htmlOptions'=>array(
								'valign'=>'top',
								'width'=>'2px'
							)
						),
						'name_warehouse',
						'address',
				array(
					'class'=>'CButtonColumn',
					),
				),
			)); ?>-->
			
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'stock-components-grid',
				'dataProvider'=>$dataGb,
				//'filter'=>$model,
					'columns'=>array(
					array(
			            'header'=>'No',
			            'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
						'htmlOptions'=>array(
							'valign'=>'top',
							'width'=>'2px'
							)
			        ),
					array(
							'header'=>'Components name',
							'name'=>'component_id',
							'value'=>'Components::model()->findByPk($data->component_id)->component_name',
							'type'=>'raw',
						),
					array(
							'header'=>'Stock',
							'name'=>'stock',
							'value'=>'$data->stock',
						),
					array(
							'header'=>'Rate Price',
							'name'=>'component_id',
							'value'=>'Components::model()->findByPk($data->component_id)->rate_price',
							'type'=>'raw',
						),
				),
			)); ?>		
		</form>
		</div>
    </div>
	  
	   <div class="portlet">
       <div class="portlet-header fixed"><img src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>images/icons/transaction.gif" alt="Latest Registered Users" /> Table List Goods</div>
		<div class="portlet-content nopadding">
        <form action="#" method="post">
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'stock-goods-grid',
				'dataProvider'=>$dataCb,
				//'filter'=>$model,
					'columns'=>array(
					array(
			            'header'=>'No',
			            'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
						'htmlOptions'=>array(
							'valign'=>'top',
							'width'=>'2px'
							)
			        ),
					array(
							'header'=>'Goods name',
							'name'=>'goods_id',
							'value'=>'Goods::model()->findByPk($data->goods_id)->goods_name',
							'type'=>'raw',
						),
					array(
							'header'=>'Stock',
							'name'=>'stock',
							'value'=>'$data->stock',
						),
					array(
							'header'=>'Rate Price',
							'name'=>'goods_id',
							'value'=>'Goods::model()->findByPk($data->goods_id)->rate_price',
							'type'=>'raw',
						),
				),
			)); ?>	
        </form>
		</div>
      </div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    


