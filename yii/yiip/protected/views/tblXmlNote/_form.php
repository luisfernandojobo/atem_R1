<?php
/* @var $this TblXmlNoteController */
/* @var $model TblXmlNote */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-xml-note-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'para'); ?>
		<?php echo $form->textField($model,'para',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'para'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remitente'); ?>
		<?php echo $form->textField($model,'remitente',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'remitente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'header'); ?>
		<?php echo $form->textField($model,'header',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'header'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textField($model,'body',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->