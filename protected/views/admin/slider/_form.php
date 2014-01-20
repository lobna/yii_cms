<?php
/* @var $this SliderController */
/* @var $model Slider */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'slider-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->hiddenField($model,'image')?>
		<?php $this->widget('ext.EFineUploader.EFineUploader',
			 array(
			       'id'=>'FineUploader',
			       'config'=>array(
			                       'autoUpload'=>true,
			                       'request'=>array(
			                          'endpoint'=> $this->createUrl('upload'),
			                          'params'=>array('YII_CSRF_TOKEN'=>Yii::app()->request->csrfToken),
			                                       ),
			                       'retry'=>array('enableAuto'=>true,'preventRetryResponseProperty'=>true),
			                       'chunking'=>array('enable'=>true,'partSize'=>100),//bytes
			                       'callbacks'=>array(
			                                        'onComplete'=>"js:function(id, name, response){ $('#Slider_image').val(response.filename) }",
			                                        'onError'=>"js:function(id, name, errorReason){ }",
			                                         ),
			                       'validation'=>array(
			                                 'allowedExtensions'=>array('jpg','jpeg','png'),
			                                 'sizeLimit'=> 4 * 1024 * 1024,//maximum file size in bytes
			                                 'minSizeLimit'=>  1024 * 1024,// minimum file size in bytes
			                                          ),
			                      )
			      ));
			 
			?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->