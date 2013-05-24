<?php
$this->breadcrumbs=array(
	'Opnam Components'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OpnamComponents', 'url'=>array('index')),
	array('label'=>'Manage OpnamComponents', 'url'=>array('admin')),
);
?>

<h1>Create OpnamComponents</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>