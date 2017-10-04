<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Widyaiswara;

/**
 * WidyaiswaraSearch represents the model behind the search form about `app\models\Widyaiswara`.
 */
class WidyaiswaraSearch extends Widyaiswara
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_pangkat_golongan', 'id_jenjang_widyaiswara'], 'integer'],
            [['nama', 'nip'], 'safe'],
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
        $query = Widyaiswara::find();

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
            'id_pangkat_golongan' => $this->id_pangkat_golongan,
            'id_jenjang_widyaiswara' => $this->id_jenjang_widyaiswara,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
