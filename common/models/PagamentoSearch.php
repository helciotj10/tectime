<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Pagamento;

/**
 * PagamentoSearch represents the model behind the search form about `common\models\Pagamento`.
 */
class PagamentoSearch extends Pagamento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ordem', 'servico', 'classificacao'], 'integer'],
            [['hora_inicio', 'hora_fim', 'assinatura'], 'safe'],
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
        $query = Pagamento::find();

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
            'ordem' => $this->ordem,
            'servico' => $this->servico,
            'classificacao' => $this->classificacao,
        ]);

        $query->andFilterWhere(['like', 'hora_inicio', $this->hora_inicio])
            ->andFilterWhere(['like', 'hora_fim', $this->hora_fim])
            ->andFilterWhere(['like', 'assinatura', $this->assinatura]);

        return $dataProvider;
    }
}
