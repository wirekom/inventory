<?php
$this->breadcrumbs=array(
	'Seller Goods'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SellerGoods', 'url'=>array('index')),
	array('label'=>'Create SellerGoods', 'url'=>array('create')),
	array('label'=>'Update SellerGoods', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SellerGoods', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SellerGoods', 'url'=>array('admin')),
);
?>

<h1>View SellerGoods #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date_time',
		'decsription',
		'goods_id',
		'type_order',
		'sender_name',
		'user_id',
	),
)); ?>
