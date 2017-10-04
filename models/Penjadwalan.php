<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penjadwalan".
 *
 * @property integer $id
 * @property integer $id_diklat
 * @property integer $id_widyaiswara
 * @property string $tanggal_mulai
 * @property string $tanggal_selesai
 * @property string $materi
 */
class Penjadwalan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penjadwalan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_diklat', 'id_widyaiswara', 'tanggal_mulai', 'tanggal_selesai', 'materi'], 'required'],
            [['id_diklat', 'id_widyaiswara'], 'integer'],
            [['tanggal_mulai', 'tanggal_selesai'], 'safe'],
            [['materi'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_diklat' => 'Id Diklat',
            'id_widyaiswara' => 'Id Widyaiswara',
            'tanggal_mulai' => 'Tanggal Mulai',
            'tanggal_selesai' => 'Tanggal Selesai',
            'materi' => 'Materi',
        ];
    }

}
