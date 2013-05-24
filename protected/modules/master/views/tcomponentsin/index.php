<?php
$this->breadcrumbs=array(
	'Tcomponents Ins',
);

$this->menu=array(
	array('label'=>'Create TComponentsIn', 'url'=>array('create')),
	array('label'=>'Manage TComponentsIn', 'url'=>array('admin')),
);
?>

<h1>Tcomponents Ins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
