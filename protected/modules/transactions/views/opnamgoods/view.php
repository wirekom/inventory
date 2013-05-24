<?php
$this->breadcrumbs=array(
	'Opnam Goods'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OpnamGoods', 'url'=>array('index')),
	array('label'=>'Create OpnamGoods', 'url'=>array('create')),
	array('label'=>'Update OpnamGoods', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OpnamGoods', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OpnamGoods', 'url'=>array('admin')),
);
?>

<h1>View OpnamGoods #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'goods_id',
		'warehouse_id',
		'stock_goods',
		'office',
		'decsription',
	),
)); ?>
