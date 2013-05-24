<?php
$this->breadcrumbs=array(
	'Goods Transactions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GoodsTransaction', 'url'=>array('index')),
	array('label'=>'Create GoodsTransaction', 'url'=>array('create')),
	array('label'=>'Update GoodsTransaction', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GoodsTransaction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GoodsTransaction', 'url'=>array('admin')),
);
?>

<h1>View GoodsTransaction #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'qty',
		'date_time',
		'decsription',
		'goods_id',
		'in',
		'out',
		'balance_history',
		'user_id',
		'type_order',
		'shipping_id',
	),
)); ?>
