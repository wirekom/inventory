<?php
$this->breadcrumbs=array(
	'Order Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrderType', 'url'=>array('index')),
	array('label'=>'Manage OrderType', 'url'=>array('admin')),
);
?>

<h1>Create OrderType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>