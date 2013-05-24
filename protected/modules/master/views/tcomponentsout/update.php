<?php
$this->breadcrumbs=array(
	'Tcomponents Outs'=>array('index'),
	$model->id_trans=>array('view','id'=>$model->id_trans),
	'Update',
);

$this->menu=array(
	array('label'=>'List TComponentsOut', 'url'=>array('index')),
	array('label'=>'Create TComponentsOut', 'url'=>array('create')),
	array('label'=>'View TComponentsOut', 'url'=>array('view', 'id'=>$model->id_trans)),
	array('label'=>'Manage TComponentsOut', 'url'=>array('admin')),
);
?>

<h1>Update TComponentsOut <?php echo $model->id_trans; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>