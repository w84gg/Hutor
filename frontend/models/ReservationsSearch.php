<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Reservations;

/**
 * ReservationsSearch represents the model behind the search form about `frontend\models\Reservations`.
 */
class ReservationsSearch extends Reservations
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'room_id', 'pos_number', 'customer_id', 'days_stay'], 'integer'],
            [['price_day'], 'number'],
            [['date_from', 'date_to', 'reservation_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Reservations::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'room_id' => $this->room_id,
            'pos_number' => $this->pos_number,
            'customer_id' => $this->customer_id,
            'price_day' => $this->price_day,
            'date_from' => $this->date_from,
            'date_to' => $this->date_to,
            'reservation_date' => $this->reservation_date,
            'days_stay' => $this->days_stay,
        ]);

        return $dataProvider;
    }
}
