<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property integer $id
 * @property string $fname
 * @property string $sname
 * @property string $lname
 * @property string $phone
 * @property string $email
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fname', 'sname', 'lname', 'phone', 'email'], 'required'],
            [['fname', 'sname', 'lname', 'phone', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fname' => 'Fname',
            'sname' => 'Sname',
            'lname' => 'Lname',
            'phone' => 'Phone',
            'email' => 'Email',
        ];
    }
}
