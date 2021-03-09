<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int|null $category_id
 * @property int|null $subcategory_id
 * @property string|null $title
 * @property string|null $description
 * @property number|null $article
 * @property number $price
 * @property number $price_old
 * @property string|null $seo_description
 * @property string|null $seo_keywords
 * @property string|null $img
 * @property int $sale
 * @property int $hit
 */
class Product extends ActiveRecord
{
    const PRODUCT_PATH_IMG ='./images/products/';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'subcategory_id', 'sale', 'hit'], 'integer'],
            [['description'], 'string'],
            [['title', 'seo_description', 'seo_keywords', 'img'], 'string', 'max' => 255],
            [['price', 'price_old'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'id категории',
            'subcategory_id' => 'id подкатегории',
            'article' => 'Артикул',
            'title' => 'Название товара',
            'description' => 'Описание товара',
            'price' => 'Цена',
            'price_old' => 'Старая цена',
            'seo_description' => 'Seo описание',
            'seo_keywords' => 'Seo ключевые слова',
            'img' => 'Изображение товара',
            'sale' => 'Акция',
            'hit' => 'Хит',
        ];
    }

    public function createProduct()
    {
        $product = new Product();
        $product->category_id = 0;
        $product->subcategory_id = 0;
        $product->article = NULL;
        $product->title = 'test title';
        $product->description = 'desc';
        $product->price = 500.8;
        $product->price_old = 600;
        $product->seo_description = 'seo desk';
        $product->seo_keywords = 'seo key';
        //$product->img = 'none';
        $product->sale = 0;
        $product->hit = 1;

        if (!$product->save()) {
            return false;
        }

        return true;
    }

    public function getExtensionImg()
    {
        $path = Product::PRODUCT_PATH_IMG;
        $image = ($this->img == '') ? 'none' : $this->img;
        $fileImg = "$path{$image}.jpg";

        $extensionImg = (!file_exists($fileImg)) ? 'png' : 'jpg';

        return $extensionImg;
    }
}
