<?php
$this->breadcrumbs=array(
	'Seller Components'=>array('index'),
	$model->id_trans=>array('view','id'=>$model->id_trans),
	'Update',
);

$this->menu=array(
	array('label'=>'List SellerComponents', 'url'=>array('index')),
	array('label'=>'Create SellerComponents', 'url'=>array('create')),
	array('label'=>'View SellerComponents', 'url'=>array('view', 'id'=>$model->id_trans)),
	array('label'=>'Manage SellerComponents', 'url'=>array('admin')),
);
?>

<h1>Update SellerComponents <?php echo $model->id_trans; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>