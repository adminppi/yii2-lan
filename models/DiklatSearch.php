<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Diklat;

/**
 * DiklatSearch represents the model behind the search form about `app\models\Diklat`.
 */
class DiklatSearch extends Diklat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_jenis_diklat', 'id_penyelenggara'], 'integer'],
            [['nama', 'tanggal_pendaftaran', 'tanggal_pelaksanaan', 'lokasi'], 'safe'],
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
        $query = Diklat::find();

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
            'id_jenis_diklat' => $this->id_jenis_diklat,
            'tanggal_pendaftaran' => $this->tanggal_pendaftaran,
            'tanggal_pelaksanaan' => $this->tanggal_pelaksanaan,
            'id_penyelenggara' => $this->id_penyelenggara,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'lokasi', $this->lokasi]);

        return $dataProvider;
    }
}
