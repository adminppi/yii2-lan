<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instansi".
 *
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property string $telepon
 * @property string $email
 * @property string $pejabat_pembina_kepegawaian
 * @property string $nama_pic
 * @property string $telepon_pic
 * @property string $email_pic
 */
class Instansi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'instansi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'telepon', 'email', 'pejabat_pembina_kepegawaian', 'nama_pic', 'telepon_pic', 'email_pic'], 'required'],
            [['alamat'], 'string'],
            [['nama', 'pejabat_pembina_kepegawaian', 'nama_pic'], 'string', 'max' => 255],
            [['telepon', 'email', 'telepon_pic', 'email_pic'], 'string', 'max' => 100],
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
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
            'email' => 'Email',
            'pejabat_pembina_kepegawaian' => 'Pejabat Pembina Kepegawaian',
            'nama_pic' => 'Nama Pic',
            'telepon_pic' => 'Telepon Pic',
            'email_pic' => 'Email Pic',
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
