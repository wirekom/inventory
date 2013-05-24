<?php
$this->breadcrumbs=array(
	'Tcomponents Outs',
);

$this->menu=array(
	array('label'=>'Create TComponentsOut', 'url'=>array('create')),
	array('label'=>'Manage TComponentsOut', 'url'=>array('admin')),
);
?>

<h1>Tcomponents Outs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
