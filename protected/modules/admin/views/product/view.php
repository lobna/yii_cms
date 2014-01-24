<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'Update Product', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Product', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1>View Product #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		 array(               
            'label'=>'Image',
            'type'=>'image',
            // 'title' => $model->name,
            'value'=>Yii::app()->baseUrl.'/assets/upload/temp/'.$model->image,
        ),    
		'description',
		'create_time',
		array('name' => 'create_user_id',
			  'value' => isset($model->create_user)? CHtml::encode($model->create_user->first_name)." ".$model->create_user->last_name:"--"
			  ),
		'update_time',
		array('name' => 'update_user_id',
			  'value' => isset($model->update_user)? CHtml::encode($model->update_user->first_name." ".$model->update_user->last_name): "Unknown"
			  ),
	),
)); ?>
