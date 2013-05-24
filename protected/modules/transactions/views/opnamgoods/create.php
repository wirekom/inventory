<?php
$this->breadcrumbs=array(
	'Opnam Goods'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OpnamGoods', 'url'=>array('index')),
	array('label'=>'Manage OpnamGoods', 'url'=>array('admin')),
);
?>

<h1>Create OpnamGoods</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>