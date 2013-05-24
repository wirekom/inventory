<?php
$this->breadcrumbs=array(
	'Components'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
$this->title='Update Component';

$this->menu=array(
	array('label'=>'Create Components', 'url'=>array('create')),
	array('label'=>'View Components', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Components', 'url'=>array('index')),
);
?>
    <!-- #PORTLETS START -->
    <div id="portlets">
    <!-- FIRST SORTABLE COLUMN START -->
      <div class="column" id="left">
      <!--THIS IS A PORTLET-->
        <div class="portlet">
		<div class="portlet-header">Form Components</div>
		<div class="portlet-content">
			<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
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
        <div class="portlet-header fixed"><img src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>images/icons/user.gif" alt="Latest Registered Users" /> Table List Components</div>
		<div class="portlet-content nopadding">
        <form action="#" method="post">
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'components-grid',
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
						'component_name',
						array(
							'header'=>'Piece',
							'name'=>'piece_id',
							'value'=>'$data->piece->piece_name',
						),
						'rate_price',
						'min_stock',
						'stock',
					array(
						'class'=>'CButtonColumn',
						),
					),
					'htmlOptions'=>array(
						'id'=>'box-table-a'
					),
			)); ?>
        </form>
		</div>
      </div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT--> 