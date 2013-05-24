<?php
$this->breadcrumbs=array(
	'Procurements'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Procurement', 'url'=>array('index')),
	array('label'=>'Create Procurement', 'url'=>array('create')),
	array('label'=>'Update Procurement', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Procurement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Procurement', 'url'=>array('admin')),
);
?>

<h1>View Procurement #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date_time',
		'suplier_id',
		'description',
		'type_order',
		'shipping_id',
	),
)); ?>
