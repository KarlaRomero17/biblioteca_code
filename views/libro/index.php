<?php

use app\models\Libro;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\data\Pagination;

/** @var yii\web\View $this */
/** @var app\models\LibroSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Libros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="libro-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Libro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'titulo',
            //reemplazar url por la img
            [
                'format'=>'html',
                'value'=>function($data){ 
                    return Html::img($data->imagen, ['width'=>'70px']); 
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Libro $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
       /* 'pager'=>[
            'options'=>[
                'class'=>'pagination-sm',
                'tag' => 'ul',
            ],  
            'prevPageLabel' => 'Previous',   // Set the label for the “previous” page button
            'nextPageLabel' => 'Next',   // Set the label for the “next” page button
            'firstPageLabel'=>'First',   // Set the label for the “first” page button
            'lastPageLabel'=>'First',    // Set the label for the “last” page button
            'nextPageCssClass'=>'next',    // Set CSS class for the “next” page button
            'prevPageCssClass'=>'prev',    // Set CSS class for the “previous” page button
            'firstPageCssClass'=>'first',    // Set CSS class for the “first” page button
            'lastPageCssClass'=>'last',    // Set CSS class for the “last” page button
            'maxButtonCount'=>10,    // Set maximum number of page buttons that can be displayed
        ],*/   
        'pager' => [ 
        'firstPageLabel' => 'First Page', 
        'lastPageLabel' => 'Last Page', 
        'class' => '\yii\widgets\LinkPager', 
            
    ],
    ]); ?>


</div>
