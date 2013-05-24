<?php
$this->breadcrumbs=array(
	'Goods'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Goods', 'url'=>array('index')),
	array('label'=>'Manage Goods', 'url'=>array('admin')),
);
?>

<h1>Create Goods</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>