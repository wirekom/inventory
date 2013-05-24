<?php
$this->breadcrumbs=array(
	'Supliers'=>array('index'),
	$model->id,
);

$this->title='View Suplier';
$this->menu=array(
	array('label'=>'Create Suplier', 'url'=>array('create')),
	array('label'=>'Update Suplier', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Suplier', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Suplier', 'url'=>array('index')),
);
?>

    <!-- #PORTLETS START -->
    <div id="portlets">
    <!-- FIRST SORTABLE COLUMN START -->
      <div class="column" id="left">
      <!--THIS IS A PORTLET-->
        <div class="portlet">
		<div class="portlet-header">View Suplier #<?php echo $model->id; ?></div>
		<div class="portlet-content">
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'attributes'=>array(
					'id',
					'suplier_name',
					'address',
					'email',
					'city',
					'post_code',
					'phone',
					'web',
					'cost_order',
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
        <div class="portlet-header fixed"><img src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> Last Registered users Table Example</div>
		<div class="portlet-content nopadding">
        <form action="#" method="post">
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'suplier-grid',
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
					'suplier_name',
					'address',
					'email',
					'city',
					'post_code',
					/*
					'phone',
					'web',
					'cost_order',
					*/
				array(
					'class'=>'CButtonColumn',
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


