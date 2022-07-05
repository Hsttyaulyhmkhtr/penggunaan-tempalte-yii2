<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property int $id
 * @property string $nama_pemilik
 * @property string $nama_kucing
 * @property string $umur
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pemilik', 'nama_kucing', 'umur'], 'required'],
            [['nama_pemilik', 'nama_kucing', 'umur'], 'string', 'max' => 50],
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
            'umur' => 'Umur',
        ];
    }
}
