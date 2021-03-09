<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vacancy".
 *
 * @property int $id
 * @property string $title
 * @property float $salary
 * @property string $requirements
 * @property string $education
 * @property string $experience
 * @property string|null $responsibilities
 * @property string|null $conditions
 * @property int $active
 */
class Vacancy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vacancy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'requirements', 'education', 'experience'], 'required'],
            [['salary'], 'number'],
            [['requirements', 'responsibilities', 'conditions'], 'string'],
            [['title', 'education', 'experience'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'salary' => 'Salary',
            'requirements' => 'Requirements',
            'education' => 'Education',
            'experience' => 'Experience',
            'responsibilities' => 'Responsibilities',
            'conditions' => 'Conditions',
            'active' => 'Active',
        ];
    }
}
