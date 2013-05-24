<?php
$this->breadcrumbs=array(
	'Goods Transactions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GoodsTransaction', 'url'=>array('index')),
	array('label'=>'Manage GoodsTransaction', 'url'=>array('admin')),
);
?>

<h1>Create GoodsTransaction</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>