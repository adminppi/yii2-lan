<?php

namespace app\models;

use Yii;
use app\models\Peserta;

/**
 * This is the model class for table "diklat".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $id_jenis_diklat
 * @property string $tanggal_pendaftaran
 * @property string $tanggal_pelaksanaan
 * @property string $lokasi
 * @property integer $id_penyelenggara
 */
class Diklat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diklat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'id_jenis_diklat', 'tanggal_pendaftaran', 'tanggal_pelaksanaan'], 'required'],
            [['id_jenis_diklat', 'id_penyelenggara'], 'integer'],
            [['tanggal_pendaftaran', 'tanggal_pelaksanaan'], 'safe'],
            [['nama', 'lokasi'], 'string', 'max' => 255],
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
            'id_jenis_diklat' => 'Jenis Diklat',
            'tanggal_pendaftaran' => 'Tanggal Pendaftaran',
            'tanggal_pelaksanaan' => 'Tanggal Pelaksanaan',
            'lokasi' => 'Lokasi',
            'id_penyelenggara' => 'Penyelenggara',
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
