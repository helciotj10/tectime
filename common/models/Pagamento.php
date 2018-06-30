<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pagamento".
 *
 * @property integer $id
 * @property string $hora_inicio
 * @property string $hora_fim
 * @property string $assinatura
 * @property integer $ordem
 * @property integer $servico
 * @property integer $classificacao
 */
class Pagamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pagamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hora_inicio', 'hora_fim', 'assinatura', 'ordem', 'servico', 'classificacao'], 'required'],
            [['assinatura'], 'string'],
            [['ordem', 'servico', 'classificacao'], 'integer'],
            [['hora_inicio', 'hora_fim'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hora_inicio' => 'Hora Inicio',
            'hora_fim' => 'Hora Fim',
            'assinatura' => 'Assinatura',
            'ordem' => 'Ordem',
            'servico' => 'Servico',
            'classificacao' => 'Classificacao',
        ];
    }
}
