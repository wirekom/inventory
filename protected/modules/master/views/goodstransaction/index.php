<?php
$this->breadcrumbs=array(
	'Goods Transactions',
);

$this->menu=array(
	array('label'=>'Create GoodsTransaction', 'url'=>array('create')),
	array('label'=>'Manage GoodsTransaction', 'url'=>array('admin')),
);
?>

<h1>Goods Transactions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
