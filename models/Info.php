<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property int $id
 * @property string $nama_pemilik
 * @property int $nama_kucing
 * @property int $umur_kucing
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pemilik', 'nama_kucing', 'umur_kucing'], 'required'],
            [['nama_kucing', 'umur_kucing'], 'integer'],
            [['nama_pemilik'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_pemilik' => 'Nama Pemilik',
            'nama_kucing' => 'Nama Kucing',
            'umur_kucing' => 'Umur Kucing',
        ];
    }
}
