<?php
$this->breadcrumbs=array(
	'Warehouses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Warehouse', 'url'=>array('index')),
	array('label'=>'Manage Warehouse', 'url'=>array('admin')),
);
?>

<h1>Create Warehouse</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>