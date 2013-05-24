<?php
$this->breadcrumbs=array(
	'Pieces'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Piece', 'url'=>array('index')),
	array('label'=>'Manage Piece', 'url'=>array('admin')),
);
?>

<h1>Create Piece</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>