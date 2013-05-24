<?php
$this->breadcrumbs=array(
	'Component Supliers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage ComponentSuplier', 'url'=>array('index')),
);
?>

<h1>Create ComponentSuplier</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>