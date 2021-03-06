<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$title = 'Update Class: ' . ' ' . $model->name;
?>
<div class="classes-update">
	<h1><?= Html::encode($title) ?></h1>
	<div class="classes-form">
		<?php $form = ActiveForm::begin(); ?>
			<?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
			<?php echo $form->field($model, 'description')->textArea(['rows' => 6]); ?>
			<div class="form-group">
				<?= Html::submitButton('Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
			</div>
		<?php ActiveForm::end(); ?>
	</div>
</div>