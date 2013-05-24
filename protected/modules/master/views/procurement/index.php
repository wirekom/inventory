<?php
$this->breadcrumbs=array(
	'Procurements',
);

$this->menu=array(
	array('label'=>'Create Procurement', 'url'=>array('create')),
	array('label'=>'Manage Procurement', 'url'=>array('admin')),
);
?>

<h1>Procurements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
