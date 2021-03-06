<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="row" style="margin-bottom: 70px;">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body" style="padding-top: 0px;">
				<?php if($allowLogin == 0) { ?>
					<?php echo $message; ?>
				<?php } else { ?>
					<?php $form = ActiveForm::begin([
						'id' => 'login-form',
						'options' => ['class' => 'form-horizontal quizzy-form'],
						'fieldConfig' => [
							'template' => "{label}\n{input}",
							'labelOptions' => ['class' => 'control-label'],
						],
					]); ?>

					<?php echo $form->field($model, 'username') ?>

					<?php echo $form->field($model, 'password', [
						'template' => "{label}\n{input}\n{error}",
					])->passwordInput() ?>

					<?php echo $form->field($model, 'rememberMe', [
						'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
					])->checkbox() ?>

					<div class="form-group">
						<?php echo Html::submitButton('Login', ['class' => 'btn btn-quizzy', 'name' => 'login-button']) ?>
						<span class="login-recover-password">
							Forgot Password? Click <a href="<?php echo \Yii::$app->getUrlManager()->createUrl('/user/recover/index'); ?>">here</a>
						</span>
					</div>

					<?php ActiveForm::end(); ?>
				<?php } ?>
			</div>
		</div>
	</div>
</div>