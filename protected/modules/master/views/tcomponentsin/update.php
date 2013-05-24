<?php
$this->breadcrumbs=array(
	'Tcomponents Ins'=>array('index'),
	$model->id_trans=>array('view','id'=>$model->id_trans),
	'Update',
);

$this->menu=array(
	array('label'=>'List TComponentsIn', 'url'=>array('index')),
	array('label'=>'Create TComponentsIn', 'url'=>array('create')),
	array('label'=>'View TComponentsIn', 'url'=>array('view', 'id'=>$model->id_trans)),
	array('label'=>'Manage TComponentsIn', 'url'=>array('admin')),
);
?>

<h1>Update TComponentsIn <?php echo $model->id_trans; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>