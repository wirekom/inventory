<?php
$this->breadcrumbs=array(
	'Seller Components'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SellerComponents', 'url'=>array('index')),
	array('label'=>'Manage SellerComponents', 'url'=>array('admin')),
);
?>

<h1>Create SellerComponents</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>