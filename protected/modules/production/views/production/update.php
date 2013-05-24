<?php
$this->breadcrumbs=array(
	'Productions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Production', 'url'=>array('index')),
	array('label'=>'Create Production', 'url'=>array('create')),
	array('label'=>'View Production', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Production', 'url'=>array('admin')),
);
?>

<h1>Update Production <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>