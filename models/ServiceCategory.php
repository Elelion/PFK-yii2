<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service_category".
 *
 * @property int $id
 * @property int $active
 * @property string|null $title
 * @property string|null $description
 * @property string $img
 */
class ServiceCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['active'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 47],
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
            'description' => 'Description',
            'img' => 'Img',
        ];
    }
}
