<?php


namespace app\models;


use yii\db\ActiveRecord;
use yii\web\NotFoundHttpException;


/**
 * This is the model class for table "cart_order_product".
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property string|null $title
 * @property float|null $price
 * @property string|null $quantity
 */
class OrderProduct extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cart_order_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'title', 'price', 'price'], 'required'],
            [['order_id', 'product_id'], 'integer'],
            [['price'], 'number'],
            [['title'], 'string', 'max' => 255],
            [['quantity'], 'integer', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'title' => 'Title',
            'price' => 'Price',
            'quantity' => 'Quantity',
        ];
    }

    public function saveOrderProducts($products, $order_id)
    {
        foreach ($products as $id => $product) {
            $this->id = null;
            $this->isNewRecord = true;

            $this->order_id = (int) $order_id + 1;
            $this->product_id = $product->id;
            $this->title = $product->title;
            $this->price = 0;
            $this->quantity;

            if (!$this->save()) {
                throw new NotFoundHttpException('Ошибка сохранения транзакции в БД...');
            }
        }

        return true;
    }
}
