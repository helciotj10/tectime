<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PagamentoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pagamento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'hora_inicio') ?>

    <?= $form->field($model, 'hora_fim') ?>

    <?= $form->field($model, 'assinatura') ?>

    <?= $form->field($model, 'ordem') ?>

    <?php // echo $form->field($model, 'servico') ?>

    <?php // echo $form->field($model, 'classificacao') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
