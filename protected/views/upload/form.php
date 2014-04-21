
<?php $form=$this->beginWidget('CActiveForm', array(
 'id'=>'files-form',
 'enableAjaxValidation'=>false,
 'htmlOptions'=>array('enctype' => 'multipart/form-data'),
)); ?>
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
    </div>
    <?php echo CHtml::submitButton('Upload'); ?>
<?php $this->endWidget(); ?>