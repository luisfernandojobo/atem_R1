<?php
/* @var $this TblXmlNoteController */
/* @var $model TblXmlNote */

$this->breadcrumbs=array(
	'Tbl Xml Notes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblXmlNote', 'url'=>array('index')),
	array('label'=>'Manage TblXmlNote', 'url'=>array('admin')),
);
?>

<h1>Create TblXmlNote</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>