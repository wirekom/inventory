<?php
$this->breadcrumbs=array(
	'Opnam Goods'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OpnamGoods', 'url'=>array('index')),
	array('label'=>'Create OpnamGoods', 'url'=>array('create')),
	array('label'=>'View OpnamGoods', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OpnamGoods', 'url'=>array('admin')),
);
?>

<h1>Update OpnamGoods <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>