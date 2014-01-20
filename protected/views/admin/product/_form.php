<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php //echo $form->fileField($model,'image'); ?>

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
			                                        'onComplete'=>"js:function(id, name, response){ $('#Product_image').val(response.filename) }",
			                                        'onError'=>"js:function(id, name, errorReason){ }",
			                                         ),
			                       'validation'=>array(
			                                 'allowedExtensions'=>array('jpg','jpeg','png'),
			                                 'sizeLimit'=> 4 * 1024 * 1024,//maximum file size in bytes
			                                 // 'minSizeLimit'=> 100*150,// minimum file size in bytes
			                                          ),
			                      )
			      ));
			 
			?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->