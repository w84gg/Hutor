<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rooms".
 *
 * @property integer $id
 * @property integer $room_number
 * @property integer $pos_number
 * @property string $av_from
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
            [['room_number', 'pos_number', 'av_from', 'price_day', 'description'], 'required'],
            [['room_number', 'pos_number'], 'integer'],
            [['av_from'], 'safe'],
            [['price_day'], 'number'],
            [['description'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room_number' => 'Room Number',
            'pos_number' => 'Pos Number',
            'av_from' => 'Av From',
            'price_day' => 'Price Day',
            'description' => 'Description',
        ];
    }
}
