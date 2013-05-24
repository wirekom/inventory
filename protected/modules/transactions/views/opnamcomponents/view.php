<?php
$this->breadcrumbs=array(
	'Opnam Components'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OpnamComponents', 'url'=>array('index')),
	array('label'=>'Create OpnamComponents', 'url'=>array('create')),
	array('label'=>'Update OpnamComponents', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OpnamComponents', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OpnamComponents', 'url'=>array('admin')),
);
?>

<h1>View OpnamComponents #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'component_id',
		'warehouse_id',
		'stock_component',
		'office',
		'decsription',
	),
)); ?>
