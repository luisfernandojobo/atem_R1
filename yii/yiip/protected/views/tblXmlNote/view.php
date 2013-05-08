<?php
/* @var $this TblXmlNoteController */
/* @var $model TblXmlNote */

$this->breadcrumbs=array(
	'Tbl Xml Notes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblXmlNote', 'url'=>array('index')),
	array('label'=>'Create TblXmlNote', 'url'=>array('create')),
	array('label'=>'Update TblXmlNote', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblXmlNote', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblXmlNote', 'url'=>array('admin')),
);
?>

<h1>View TblXmlNote #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'para',
		'remitente',
		'header',
		'body',
	),
)); ?>
