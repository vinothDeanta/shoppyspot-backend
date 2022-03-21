<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_size".
 *
 * @property int $size_id
 * @property string $size_name
 * @property string|null $size_desc
 * @property string|null $createddate
 * @property string|null $updateddate
 */
class TbSize extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_size';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['size_name'], 'required'],
            [['createddate', 'updateddate'], 'safe'],
            [['size_name', 'size_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'size_id' => 'Size ID',
            'size_name' => 'Size Name',
            'size_desc' => 'Size Desc',
            'createddate' => 'Createddate',
            'updateddate' => 'Updateddate',
        ];
    }
}
