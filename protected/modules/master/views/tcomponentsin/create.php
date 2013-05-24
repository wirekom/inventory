<?php
$this->breadcrumbs=array(
	'Tcomponents Ins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TComponentsIn', 'url'=>array('index')),
	array('label'=>'Manage TComponentsIn', 'url'=>array('admin')),
);
?>

<h1>Create TComponentsIn</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>