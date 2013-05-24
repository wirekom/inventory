<?php
$this->breadcrumbs=array(
	'Components'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Components', 'url'=>array('index')),
);
?>

<h1>Create Components</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>