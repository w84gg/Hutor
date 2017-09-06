<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "reservations".
 *
 * @property integer $id
 * @property integer $room_id
 * @property integer $pos_number
 * @property integer $customer_id
 * @property string $price_day
 * @property string $date_from
 * @property string $date_to
 * @property string $reservation_date
 * @property integer $days_stay
 */
class Reservations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reservations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_id', 'pos_number', 'customer_id', 'price_day', 'date_from', 'date_to', 'days_stay'], 'required'],
            [['room_id', 'pos_number', 'customer_id', 'days_stay'], 'integer'],
            [['price_day'], 'number'],
            [['date_from', 'date_to', 'reservation_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room_id' => 'Room ID',
            'pos_number' => 'Pos Number',
            'customer_id' => 'Customer ID',
            'price_day' => 'Price Day',
            'date_from' => 'Date From',
            'date_to' => 'Date To',
            'reservation_date' => 'Reservation Date',
            'days_stay' => 'Days Stay',
        ];
    }
}
