<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NotulensiBem;

/**
 * NotulensiBemSearch represents the model behind the search form of `app\models\NotulensiBem`.
 */
class NotulensiBemSearch extends NotulensiBem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idnotbem'], 'integer'],
            [['tema', 'tanggal_rapat', 'notulensi'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = NotulensiBem::find();

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
            'idnotbem' => $this->idnotbem,
            'tanggal_rapat' => $this->tanggal_rapat,
        ]);

        $query->andFilterWhere(['like', 'tema', $this->tema])
            ->andFilterWhere(['like', 'notulensi', $this->notulensi]);

        return $dataProvider;
    }
}
