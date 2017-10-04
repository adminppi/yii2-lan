<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "widyaiswara".
 *
 * @property integer $id
 * @property string $nama
 * @property string $nip
 * @property integer $id_pangkat_golongan
 * @property integer $id_jenjang_widyaiswara
 */
class Widyaiswara extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'widyaiswara';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'nip', 'id_pangkat_golongan', 'id_jenjang_widyaiswara'], 'required'],
            [['id_pangkat_golongan', 'id_jenjang_widyaiswara'], 'integer'],
            [['nama'], 'string', 'max' => 100],
            [['nip'], 'string', 'max' => 17],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'nip' => 'Nip',
            'id_pangkat_golongan' => 'Id Pangkat Golongan',
            'id_jenjang_widyaiswara' => 'Id Jenjang Widyaiswara',
        ];
    }

    /**
     * @inheritdoc
     * @return array untuk dropdown
     */
    public static function getList()
    {
        return \yii\helpers\ArrayHelper::map(self::find()->all(), 'id', 'nama');
    }
}
