<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "servicos".
 *
 * @property integer $id
 * @property string $area
 * @property string $descricao
 * @property string $data
 * @property string $localisacao
 * @property string $incentivo
 * @property string $material
 * @property integer $estado
 */
class Servicos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'servicos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['area', 'descricao', 'data', 'localisacao', 'incentivo', 'material', 'estado'], 'required'],
            [['descricao'], 'string'],
            [['estado'], 'integer'],
            [['area', 'data', 'localisacao', 'incentivo'], 'string', 'max' => 100],
            [['material'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'area' => 'Área',
            'descricao' => 'descrição',
            'data' => 'Data',
            'localisacao' => 'Localização',
            'incentivo' => 'Incentivo',
            'material' => 'Material',
            'estado' => 'Estado',
        ];
    }
}
