<?php
$this->breadcrumbs=array(
	'Seller Goods'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SellerGoods', 'url'=>array('index')),
	array('label'=>'Manage SellerGoods', 'url'=>array('admin')),
);
?>

<h1>Create SellerGoods</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>