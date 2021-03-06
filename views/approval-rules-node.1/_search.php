<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ApprovalRulesNodeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="approval-rules-node-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'instansi_id') ?>

    <?= $form->field($model, 'jabatan_id') ?>

    <?= $form->field($model, 'bisa_menandatangani') ?>

    <?= $form->field($model, 'bisa_atas_nama') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
