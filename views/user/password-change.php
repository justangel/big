<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="panel panel-danger">
    <div class="panel-heading">
        <h1 class="panel-title"><?= Yii::t('app', 'Change password') ?></h1>
    </div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin([
            'id' => 'user-signup-form'
        ]); ?>
        <div class="form-group">
            <?= $form->field($userPasswordChangeForm, 'oldPassword')->passwordInput() ?>
            <?= $form->field($userPasswordChangeForm, 'newPassword') ?>
            <?= Html::submitButton(Yii::t('app', 'Next'),
                ['class' => 'btn btn-danger']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>