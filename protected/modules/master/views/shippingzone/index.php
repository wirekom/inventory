<?php
$this->breadcrumbs=array(
	'Shipping Zones',
);

$this->menu=array(
	array('label'=>'Create ShippingZone', 'url'=>array('create')),
	array('label'=>'Manage ShippingZone', 'url'=>array('admin')),
);
?>

<h1>Shipping Zones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
