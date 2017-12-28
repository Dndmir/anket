<?php

namespace kouosl\anket\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\anket\models\Anket;

/**
 * AnketSearch represents the model behind the search form of `kouosl\anket\models\Anket`.
 */
class AnketSearch extends Anket
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'olumlu_yanit', 'olumsuz_yanit', 'sure'], 'integer'],
            [['Anket', 'tarih_saat', 'sonuc'], 'safe'],
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
        $query = Anket::find();

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
            'olumlu_yanit' => $this->olumlu_yanit,
            'olumsuz_yanit' => $this->olumsuz_yanit,
            'sure' => $this->sure,
            'tarih_saat' => $this->tarih_saat,
        ]);

        $query->andFilterWhere(['like', 'Anket', $this->Anket])
            ->andFilterWhere(['like', 'sonuc', $this->sonuc]);

        return $dataProvider;
    }
}
