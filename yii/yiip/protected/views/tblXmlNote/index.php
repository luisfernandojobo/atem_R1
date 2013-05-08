<?php
/* @var $this TblXmlNoteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Xml Notes',
);

$this->menu=array(
	array('label'=>'Create TblXmlNote', 'url'=>array('create')),
	array('label'=>'Manage TblXmlNote', 'url'=>array('admin')),
);
?>

<h1>Tbl Xml Notes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
