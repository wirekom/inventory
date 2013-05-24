<?php
$this->breadcrumbs=array(
	'Productions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Production', 'url'=>array('index')),
	array('label'=>'Manage Production', 'url'=>array('admin')),
);
?>

<h1>Create Production</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>