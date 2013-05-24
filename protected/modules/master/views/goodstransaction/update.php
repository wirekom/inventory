<?php
$this->breadcrumbs=array(
	'Goods Transactions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GoodsTransaction', 'url'=>array('index')),
	array('label'=>'Create GoodsTransaction', 'url'=>array('create')),
	array('label'=>'View GoodsTransaction', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GoodsTransaction', 'url'=>array('admin')),
);
?>

<h1>Update GoodsTransaction <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>