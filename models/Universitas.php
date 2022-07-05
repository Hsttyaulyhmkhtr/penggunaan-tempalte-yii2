<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "universitas".
 *
 * @property int $id
 * @property string $nama_kampus
 * @property string $alamat_kampus
 * @property string $agreditas_kampus
 */
class Universitas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'universitas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kampus', 'alamat_kampus', 'agreditas_kampus'], 'required'],
            [['nama_kampus', 'agreditas_kampus'], 'string', 'max' => 50],
            [['alamat_kampus'], 'string', 'max' => 110],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_kampus' => 'Nama Kampus',
            'alamat_kampus' => 'Alamat Kampus',
            'agreditas_kampus' => 'Agreditas Kampus',
        ];
    }
}
