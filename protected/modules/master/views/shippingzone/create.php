<?php
$this->breadcrumbs=array(
	'Shipping Zones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ShippingZone', 'url'=>array('index')),
	array('label'=>'Manage ShippingZone', 'url'=>array('admin')),
);
?>

<h1>Create ShippingZone</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>