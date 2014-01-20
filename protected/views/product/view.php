<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name,
);
?>

<h1><?php echo CHtml::encode($model->name) ?></h1>

<?php echo '<img src="'.Yii::app()->baseUrl ."/assets/upload/temp/". $model->image.'" width="230" />'; //thumbnail ?>
	
<p><?php echo CHtml::encode($model->description)?></p>