<?php
/* @var $this TblUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Users',
);

$this->menu=array(
	array('label'=>'Create TblUser', 'url'=>array('create')),
	array('label'=>'Manage TblUser', 'url'=>array('admin')),
);
?>
este archivo es el index


<form method="post" action="/atem_R1/yii/yiip/index.php?r=tblUser/admin">
<input type="submit" value="ir a admin.php" >
</form>


<h1>Tbl Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
