<?php
$this->breadcrumbs=array(
	'Goods Builds'=>array('index'),
	$model->id,
);

$this->title= 'View Goods Components';
$this->menu=array(
	array('label'=>'Create Goods Components', 'url'=>array('create')),
	array('label'=>'Update Goods Components', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Goods Components', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Goods Components', 'url'=>array('index')),
);
?>

   <!-- #PORTLETS START -->
    <div id="portlets">
    <!-- FIRST SORTABLE COLUMN START -->
      <div class="column" id="left">
      <!--THIS IS A PORTLET-->
        <div class="portlet">
		<div class="portlet-header">View Goods Components #<?php echo $model->id; ?></div>
		<div class="portlet-content">
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'attributes'=>array(
					'id',
					'goods.goods_name',
					'components.component_name',
					'component_qty',
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
        <div class="portlet-header fixed"><img src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>images/icons/build.gif" alt="Latest Registered Users" /> Table List Goods Components</div>
		<div class="portlet-content nopadding">
        <form action="#" method="post">
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'goods-build-grid',
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
					array(
							'header'=>'Goods',
							'name'=>'goods_id',
							'value'=>'$data->goods->goods_name',
						),
					array(
							'header'=>'Compoonents',
							'name'=>'components_id',
							'value'=>'$data->components->component_name',
						),
					'component_qty',
				array(
						'class'=>'CButtonColumn',
						'buttons'=>array(
							'create' => array(
								'label'=>'Create Component',
								'url'=>'Yii::app()->createUrl("/master/goods/components", array("id"=>$data->goods_id))',
								'imageUrl'=>Yii::app()->request->baseUrl.'/assets/6c040e3/gridview/create.png',
								)
							),
						'template'=>'{view}{update}{delete}{create}'
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

