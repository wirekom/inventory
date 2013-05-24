<?php
$this->breadcrumbs=array(
	'Shipping Zones'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ShippingZone', 'url'=>array('index')),
	array('label'=>'Create ShippingZone', 'url'=>array('create')),
	array('label'=>'View ShippingZone', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ShippingZone', 'url'=>array('admin')),
);
?>

<h1>Update ShippingZone <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>