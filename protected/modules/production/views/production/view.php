<?php
$this->breadcrumbs=array(
	'Productions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Production', 'url'=>array('index')),
	array('label'=>'Create Production', 'url'=>array('create')),
	array('label'=>'Update Production', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Production', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Production', 'url'=>array('admin')),
);
?>

<h1>View Production #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'goods_id',
		'components_qty',
		'warehouse_id',
	),
)); ?>
