<?php
$this->breadcrumbs=array(
	'Goods Transactions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List GoodsTransaction', 'url'=>array('index')),
	array('label'=>'Create GoodsTransaction', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('goods-transaction-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Goods Transactions</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'goods-transaction-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'qty',
		'date_time',
		'decsription',
		'goods_id',
		'in',
		/*
		'out',
		'balance_history',
		'user_id',
		'type_order',
		'shipping_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
