<?php
$this->breadcrumbs=array(
	'Tcomponents Ins'=>array('index'),
	$model->id_trans,
);

$this->menu=array(
	array('label'=>'List TComponentsIn', 'url'=>array('index')),
	array('label'=>'Create TComponentsIn', 'url'=>array('create')),
	array('label'=>'Update TComponentsIn', 'url'=>array('update', 'id'=>$model->id_trans)),
	array('label'=>'Delete TComponentsIn', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_trans),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TComponentsIn', 'url'=>array('admin')),
);
?>

<h1>View TComponentsIn #<?php echo $model->id_trans; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_trans',
		'qty',
		'date_time',
		'decsription',
		'balance_history',
		'component_id',
		'user_id',
	),
)); ?>
