<?php
$this->breadcrumbs=array(
	'Procurements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Procurement', 'url'=>array('index')),
	array('label'=>'Manage Procurement', 'url'=>array('admin')),
);
?>

<h1>Create Procurement</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>