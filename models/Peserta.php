<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peserta".
 *
 * @property integer $id
 * @property integer $id_instansi
 * @property string $nama
 * @property string $nip
 * @property integer $id_jenis_kelamin
 * @property integer $id_pangkat_golongan
 * @property string $jabatan
 * @property integer $id_jenis_diklat
 * @property integer $id_diklat
 */
class Peserta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peserta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_instansi', 'nama', 'nip', 'id_jenis_kelamin', 'id_pangkat_golongan', 'jabatan', 'id_jenis_diklat'], 'required'],
            [['id_instansi', 'id_jenis_kelamin', 'id_pangkat_golongan', 'id_jenis_diklat', 'id_diklat'], 'integer'],
            [['nama', 'jabatan'], 'string', 'max' => 100],
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
            'id_instansi' => 'Id Instansi',
            'nama' => 'Nama',
            'nip' => 'Nip',
            'id_jenis_kelamin' => 'Id Jenis Kelamin',
            'id_pangkat_golongan' => 'Id Pangkat Golongan',
            'jabatan' => 'Jabatan',
            'id_jenis_diklat' => 'Id Jenis Diklat',
            'id_diklat' => 'Id Diklat',
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
