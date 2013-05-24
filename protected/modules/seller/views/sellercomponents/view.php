<?php
$this->breadcrumbs=array(
	'Seller Components'=>array('index'),
	$model->id_trans,
);

$this->menu=array(
	array('label'=>'List SellerComponents', 'url'=>array('index')),
	array('label'=>'Create SellerComponents', 'url'=>array('create')),
	array('label'=>'Update SellerComponents', 'url'=>array('update', 'id'=>$model->id_trans)),
	array('label'=>'Delete SellerComponents', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_trans),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SellerComponents', 'url'=>array('admin')),
);
?>

<h1>View SellerComponents #<?php echo $model->id_trans; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_trans',
		'date_time',
		'decsription',
		'component_id',
		'type_order',
		'sender_name',
		'user_id',
	),
)); ?>
