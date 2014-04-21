<?php
/* @var $this UploadController */
/* @var $model Upload */

$this->breadcrumbs=array(
	'Uploads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Upload', 'url'=>array('index')),
	array('label'=>'Manage Upload', 'url'=>array('admin')),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<!--
<div class="row">
    <?php
        $this->widget('CMultiFileUpload', array(
            'model'=>$model,
            'attribute' => 'location',
            'max'=>5,
            'accept' =>'xls|csv|xlsm|xlsx|xml',
            'duplicate' => 'Duplicate file!', 
            'denied' => 'Invalid file type - Must be Excel type or CSV',
        ));  
 
        ?>  
    </div>-->
    <?php //echo CHtml::submitButton('Upload'); ?>

