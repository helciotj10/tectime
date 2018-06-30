<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Servicos;

/**
 * ServicosSearch represents the model behind the search form about `common\models\Servicos`.
 */
class ServicosSearch extends Servicos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'estado'], 'integer'],
            [['area', 'descricao', 'data', 'localisacao', 'incentivo', 'material'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Servicos::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'estado' => $this->estado,
        ]);

        $query->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'descricao', $this->descricao])
            ->andFilterWhere(['like', 'data', $this->data])
            ->andFilterWhere(['like', 'localisacao', $this->localisacao])
            ->andFilterWhere(['like', 'incentivo', $this->incentivo])
            ->andFilterWhere(['like', 'material', $this->material]);

        return $dataProvider;
    }
}
