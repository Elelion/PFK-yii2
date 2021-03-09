<?php


namespace app\models;


use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class Order extends ActiveRecord
{
    public static function tableName()
    {
        return 'cart_order';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],

                'value' => new Expression('NOW()'),
            ],
        ];
    }

    public function rules()
    {
        return [
            [['name'], 'required', 'message' => 'Укажите свое имя'],
            [['email'], 'required', 'message' => 'Укажите свой email'],
            [['phone'], 'required', 'message' => 'Укажите свой контактный телефон'],
            [['note'], 'string'],
            [['email'], 'email'],
            [['created_at, updated_at'], 'safe'],
            [['price'], 'number'],
            [['status'], 'boolean'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя *',
            'email' => 'eMail *',
            'phone' => 'Телефон *',
            'note' => 'Ваш комментарий',
            'created_at' => 'Дата создания',
            'updated_at' => 'Обновлено',
            'price' => 'Цена',
            'status' => 'Статус',
        ];
    }
}