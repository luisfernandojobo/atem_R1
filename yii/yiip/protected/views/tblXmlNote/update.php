<?php
/* @var $this TblXmlNoteController */
/* @var $model TblXmlNote */

$this->breadcrumbs=array(
	'Tbl Xml Notes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblXmlNote', 'url'=>array('index')),
	array('label'=>'Create TblXmlNote', 'url'=>array('create')),
	array('label'=>'View TblXmlNote', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblXmlNote', 'url'=>array('admin')),
);
?>

<h1>Update TblXmlNote <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>