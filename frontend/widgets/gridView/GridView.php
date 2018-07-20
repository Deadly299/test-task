<?php

namespace frontend\widgets\gridView;

use Yii;
use yii\base\Widget;

class GridView extends Widget
{
    const PREFIX_SORT_DESC = '-';

    public $query;
    public $limit = 3;

    public function run()
    {
        Yii::$app->request->get('page') ? $page = Yii::$app->request->get('page') : $page = 1;
        $totalResults = $this->query->count();
        $totalPages = ceil($totalResults / $this->limit);
        $startingLimit = ($page - 1) * $this->limit;

        $models = $this->query->limit($this->limit)->offset($startingLimit)->all();

        return $this->render('index', [
            'totalPages' => $totalPages,
            'models' => $models,
            'page' => $page,
        ]);
    }
}