<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $date_from;
    public $date_to;
    public $adult;
    public $child;

    public function rules()
    {
        return [
            [['date_from', 'date_to', 'adult', 'required'],
        ];
    }
}
