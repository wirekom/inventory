<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div id="loginform" class="login">
	<h1>Login</h1>

	<p>Please fill out the following form with your login credentials:</p>

	
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>

		<p class="note"><label>Fields with <span class="required">*</span> are required.</label></p>

		<p>
			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username', array('class'=>'input')); ?>
			<?php echo $form->error($model,'username'); ?>
		</p>

		<p>
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password', array('class'=>'input')); ?>
			<?php echo $form->error($model,'password'); ?>
			<!--<p class="hint">
				Hint: You may login with <tt>demo/demo</tt> or <tt>admin/admin</tt>.
			</p>-->
		</p>

		<p class="rememberMe">
		<?php echo $form->checkBox($model,'rememberMe', array('class'=>'remember')); ?>
			<?php echo $form->label($model,'rememberMe'); ?>
			<?php echo $form->error($model,'rememberMe'); ?>
		</p>

		<p class="buttons">
			<?php echo CHtml::submitButton('Login', array('class'=>'button-primary')); ?>
		</p>

	<?php $this->endWidget(); ?>
	<!-- form -->
</div>
<div class="clear"> </div>