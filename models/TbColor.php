<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_color".
 *
 * @property int $color_id
 * @property string $color_name
 * @property string|null $color_desc
 * @property string|null $color_code
 * @property string|null $createddate
 * @property string|null $updateddate
 */
class TbColor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_color';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['color_name'], 'required'],
            [['createddate', 'updateddate'], 'safe'],
            [['color_name', 'color_desc', 'color_code'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'color_id' => 'Color ID',
            'color_name' => 'Color Name',
            'color_desc' => 'Color Desc',
            'color_code' => 'Color Code',
            'createddate' => 'Createddate',
            'updateddate' => 'Updateddate',
        ];
    }
}
