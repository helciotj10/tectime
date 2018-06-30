<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Pagamento */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pagamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pagamento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'hora_inicio',
            'hora_fim',
            'assinatura:ntext',
            'ordem',
            'servico',
            'classificacao',
        ],
    ]) ?>

</div>
