<?php
$this->breadcrumbs=array(
	'Opnam Components'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OpnamComponents', 'url'=>array('index')),
	array('label'=>'Create OpnamComponents', 'url'=>array('create')),
	array('label'=>'View OpnamComponents', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OpnamComponents', 'url'=>array('admin')),
);
?>

<h1>Update OpnamComponents <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>