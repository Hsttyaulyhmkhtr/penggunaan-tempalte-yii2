<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yii2".
 *
 * @property int $id
 * @property string $alamat
 * @property string $ttl
 * @property string $jk
 * @property string $jurusan
 * @property string $nim
 * @property string $hobi
 * @property string $telp
 * @property string $email
 */
class yii2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alamat', 'ttl', 'jk', 'jurusan', 'nim', 'hobi', 'telp', 'email'], 'required'],
            [['ttl'], 'safe'],
            [['jk'], 'string'],
            [['alamat', 'jurusan', 'telp'], 'string', 'max' => 50],
            [['nim'], 'string', 'max' => 120],
            [['hobi'], 'string', 'max' => 150],
            [['email'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alamat' => 'Alamat',
            'ttl' => 'Ttl',
            'jk' => 'Jk',
            'jurusan' => 'Jurusan',
            'nim' => 'Nim',
            'hobi' => 'Hobi',
            'telp' => 'Telp',
            'email' => 'Email',
        ];
    }
}
