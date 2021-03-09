<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jumbotron".
 *
 * @property int $id
 * @property int $active
 * @property string|null $title
 * @property string|null $slogan
 * @property string|null $description
 * @property string|null $full_description
 * @property string $img
 */
class Jumbotron extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jumbotron';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['active'], 'integer'],
            [['title'], 'string', 'max' => 20],
            [['slogan'], 'string', 'max' => 40],
            [['description'], 'string', 'max' => 100],
            [['full_description'], 'string'],
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
            'slogan' => 'Slogan',
            'description' => 'Description',
            'full_description' => 'Full description',
            'img' => 'Img',
        ];
    }
}
