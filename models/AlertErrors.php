<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alert_error".
 *
 * @property int $id
 * @property string|null $error_type
 * @property string|null $error_title
 * @property string|null $error_caption
 * @property string|null $error_description
 */
class AlertErrors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alert_error';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['error_description'], 'string'],
            [['error_type'], 'string', 'max' => 32],
            [['error_title'], 'string', 'max' => 64],
            [['error_caption'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'error_type' => 'Error Type',
            'error_title' => 'Error Title',
            'error_caption' => 'Error Caption',
            'error_description' => 'Error Description',
        ];
    }
}
