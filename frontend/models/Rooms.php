<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rooms".
 *
 * @property integer $id
 * @property string $title
 * @property integer $bed_type
 * @property string $price_day
 * @property string $description
 */
class Rooms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rooms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'bed_type', 'price_day', 'description'], 'required'],
            [['bed_type'], 'integer'],
            [['price_day'], 'number'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'bed_type' => 'Тип номера',
            'price_day' => 'Цена за сутки',
            'description' => 'Описание',
        ];
    }
}
