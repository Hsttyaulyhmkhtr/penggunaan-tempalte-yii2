<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Biodata;

/**
 * BiodataSearch represents the model behind the search form of `app\models\Biodata`.
 */
class BiodataSearch extends Biodata
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['alamat', 'ttl', 'jk', 'jurusan', 'nim', 'hobi', 'telp', 'email'], 'safe'],
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
        $query = Biodata::find();

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
            'ttl' => $this->ttl,
        ]);

        $query->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'jurusan', $this->jurusan])
            ->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'hobi', $this->hobi])
            ->andFilterWhere(['like', 'telp', $this->telp])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
