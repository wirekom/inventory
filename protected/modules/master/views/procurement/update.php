<?php
$this->breadcrumbs=array(
	'Procurements'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Procurement', 'url'=>array('index')),
	array('label'=>'Create Procurement', 'url'=>array('create')),
	array('label'=>'View Procurement', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Procurement', 'url'=>array('admin')),
);
?>

<h1>Update Procurement <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>