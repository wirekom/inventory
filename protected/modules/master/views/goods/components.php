<?php
$this->breadcrumbs=array(
	'Add Components',
);
$this->title="Add Components";
$this->menu=array(
	array('label'=>'Manage Add Components', 'url'=>array('components')),
);
?>

    <!-- #PORTLETS START -->
    <div id="portlets">
    <!-- FIRST SORTABLE COLUMN START -->
      <div class="column" id="left">
      <!--THIS IS A PORTLET-->
        <div class="portlet">
		<div class="portlet-header">Form Add Components</div>
		<div class="portlet-content">
			<?php echo $this->renderPartial('_components', array('model'=>$model,'goods'=>$goods)); ?>
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
        <div class="portlet-header fixed"><img src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> Table List Add Components</div>
		<div class="portlet-content nopadding">
        <form action="#" method="post">
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'goods-build-grid',
				'dataProvider'=>$dataGb,
			//	'filter'=>$dataGb,
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
							'value'=>'$data->goods->goods_name',
						),
					array(
							'header'=>'Components',
							'name'=>'components_id',
							'value'=>'$data->components->component_name',
						),
					'component_qty',
				array(
					'class'=>'CButtonColumn',
					'template'=>'{view}{update}{delete}{create}',
						'buttons'=>array(
							'view' => array(
								'label'=>'view',
								'imageUrl'=>Yii::app()->request->baseUrl.'/assets/6c040e3/gridview/view.png',
								'url'=>'Yii::app()->createUrl("/master/goodsbuild/view", array("id"=>$data->id))',
							),
							'update' => array(
								'label'=>'update',
								'imageUrl'=>Yii::app()->request->baseUrl.'/assets/6c040e3/gridview/update.png',
								'url'=>'Yii::app()->createUrl("/master/goodsbuild/update", array("id"=>$data->id))',
							),
							'delete' => array(
								'label'=>'delete',
								'imageUrl'=>Yii::app()->request->baseUrl.'/assets/6c040e3/gridview/delete.png',
								'url'=>'Yii::app()->createUrl("/master/goodsbuild/delete", array("id"=>$data->id))',
							),
							'create' => array(
								'label'=>'create',
								'imageUrl'=>Yii::app()->request->baseUrl.'/assets/6c040e3/gridview/create.png',
								'url'=>'Yii::app()->createUrl("/master/goods/components", array("id"=>$data->goods_id))',
							),
						),
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