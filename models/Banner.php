<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property int $id
 * @property int $active
 * @property string|null $title
 * @property string|null $mini_description
 * @property string $full_description
 * @property string $img
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['active'], 'integer'],
            [['full_description'], 'required'],
            [['full_description'], 'string'],
            [['title'], 'string', 'max' => 25],
            [['mini_description'], 'string', 'max' => 50],
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'active' => 'Active',
            'title' => 'Title',
            'mini_description' => 'Mini Description',
            'full_description' => 'Full Description',
            'img' => 'Img',
        ];
    }
}
