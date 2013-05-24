<?php
$this->breadcrumbs=array(
	'Seller Goods'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SellerGoods', 'url'=>array('index')),
	array('label'=>'Create SellerGoods', 'url'=>array('create')),
	array('label'=>'View SellerGoods', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SellerGoods', 'url'=>array('admin')),
);
?>

<h1>Update SellerGoods <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>