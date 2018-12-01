<?php
    use yii\widgets\ActiveForm;
    use \yii\helpers\Html;
?>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3>Login</h3>
    </div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin(['id' => 'user-login-form']);?>
            <?= $form->field($userLoginForm, 'email'); ?>
            <?= $form->field($userLoginForm, 'password')->passwordInput(); ?>
            <?= Html::submitButton('Enter', ['class' => 'btn btn-primary']);?>
        <?php ActiveForm::end(); ?>
    </div>
</div>