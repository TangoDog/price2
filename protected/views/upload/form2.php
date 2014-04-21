<?php
/* @var $this UploadController */
/* @var $model Upload */
/* @var $form CActiveForm */
?>
<fieldset>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
		    'id'=>'upload-form-form',
           'enableAjaxValidation' => false,
            //This is very important when uploading files
          'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
      ?>    
 	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated'); ?>
		<?php echo $form->textField($model,'updated'); ?>
		<?php echo $form->error($model,'updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url'); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>
	        <!-- Other Fields... -->
        <div class="row">
            <?php echo $form->labelEx($model,'photos'); ?>
            <?php
            $this->widget( 'xupload.XUpload', array(
                'url' => Yii::app( )->createUrl( "/u/upload"),
                //our XUploadForm
                'model' => $photos,
                //We set this for the widget to be able to target our own form
                'htmlOptions' => array('id'=>'upload-form-form'),
                'attribute' => 'file',
                'multiple' => true,
                //Note that we are using a custom view for our widget
                //Thats becase the default widget includes the 'form' 
                //which we don't want here
                //'formView' => 'application.views.somemodel._form',
                )    
            );
            ?>
            <button type="submit">Submit</button>
            
        </div>
    <?php $this->endWidget(); ?>
</fieldset>

