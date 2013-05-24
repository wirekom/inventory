<?php
$this->breadcrumbs=array(
	'Tcomponents Outs'=>array('index'),
	$model->id_trans,
);

$this->menu=array(
	array('label'=>'List TComponentsOut', 'url'=>array('index')),
	array('label'=>'Create TComponentsOut', 'url'=>array('create')),
	array('label'=>'Update TComponentsOut', 'url'=>array('update', 'id'=>$model->id_trans)),
	array('label'=>'Delete TComponentsOut', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_trans),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TComponentsOut', 'url'=>array('admin')),
);
?>

<h1>View TComponentsOut #<?php echo $model->id_trans; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_trans',
		'qty',
		'date_time',
		'decsription',
		'balance_history',
		'component_id',
		'transaction_type',
		'goods_id',
		'goods_t_id',
		'user_id',
	),
)); ?>
