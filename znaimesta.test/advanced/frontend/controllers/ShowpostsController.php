<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Posts;

class ShowpostsController extends Controller
{
    public function actionIndex()
    {
        $query = Posts::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $posts = $query->orderBy('post_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'posts' => $posts,
            'pagination' => $pagination,
        ]);
    }

    public function actionSingle ()
    {
        $query = Posts::find();

        $pagination = new Pagination([
            'defaultPageSize' => 500,
            'totalCount' => 1,
        ]);

        $posts = $query->orderBy('post_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('single', [
            'posts' => $posts,
            'pagination' => $pagination,
            'postid' => 334,
        ]);
    }
}