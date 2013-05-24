<?php
$this->breadcrumbs=array(
	'Transaction Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TransactionType', 'url'=>array('index')),
	array('label'=>'Manage TransactionType', 'url'=>array('admin')),
);
?>

<h1>Create TransactionType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>