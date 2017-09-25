<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use frontend\controllers\RoomsController;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RoomsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Наши номера';
?>
<div id="main_container">

    <div class="numbers"><?= Html::encode($this->title) ?></div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div id="rooms">
        <?php $arr = RoomsController::getAllRooms();
        $data = ArrayHelper::toArray($arr, ['frontend\models\Rooms' =>
            ['id', 'title', 'bed_type', 'price_day', 'description']]);
        foreach ($data as $room) { ?>
        <div class="room">
            <?php
            echo "<div class='image'><img width='200px' src='images/room.jpg'></div>";
            echo "<div class='info'>";
            echo "<div class='title'>"."$room[title]"."</div>";
            echo "<div class='bed_type'>"."$room[bed_type]"."</div>";
            echo "<div class='price'>"."$room[price_day]"."</div>";
            echo "<div class='description'>"."$room[description]"."</div>";
            echo "</div>";
            ?>
        </div>
        <?php } ?>
    </div>


</div>
