<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penyelenggara".
 *
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property string $email
 * @property string $telepon
 * @property string $nama_pic
 * @property string $telepon_pic
 * @property string $email_pic
 */
class Penyelenggara extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penyelenggara';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'unique'],
            [['alamat','email'], 'required'],
            [['alamat'], 'string'],
            [['nama', 'alamat', 'email', 'telepon', 'nama_pic', 'telepon_pic', 'email_pic'], 'string', 'max' => 100],
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
            'email' => 'Email',
            'telepon' => 'Telepon',
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
