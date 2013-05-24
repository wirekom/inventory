<?php
$this->breadcrumbs=array(
	'Tcomponents Outs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TComponentsOut', 'url'=>array('index')),
	array('label'=>'Manage TComponentsOut', 'url'=>array('admin')),
);
?>

<h1>Create TComponentsOut</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>