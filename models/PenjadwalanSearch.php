<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Penjadwalan;

/**
 * PenjadwalanSearch represents the model behind the search form about `app\models\Penjadwalan`.
 */
class PenjadwalanSearch extends Penjadwalan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_diklat', 'id_widyaiswara'], 'integer'],
            [['tanggal_mulai', 'tanggal_selesai', 'materi'], 'safe'],
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
        $query = Penjadwalan::find();

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
            'id_diklat' => $this->id_diklat,
            'id_widyaiswara' => $this->id_widyaiswara,
            'tanggal_mulai' => $this->tanggal_mulai,
            'tanggal_selesai' => $this->tanggal_selesai,
        ]);

        $query->andFilterWhere(['like', 'materi', $this->materi]);

        return $dataProvider;
    }
}
