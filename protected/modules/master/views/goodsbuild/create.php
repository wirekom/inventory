<?php
$this->breadcrumbs=array(
	'Goods Builds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GoodsBuild', 'url'=>array('index')),
	array('label'=>'Manage GoodsBuild', 'url'=>array('admin')),
);
?>

<h1>Create GoodsBuild</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>