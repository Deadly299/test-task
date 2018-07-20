<?php

namespace frontend\widgets\slickGridView;

use Yii;
use yii\base\Widget;

class SlickGridView extends Widget
{
    const PREFIX_SORT_DESC = '-';

    public $query;
    public $limit = 10;

    public function run()
    {
        Yii::$app->request->get('page') ? $page = Yii::$app->request->get('page') : $page = 1;
        $totalPages = self::getTotalPages($this->query, $this->limit);
        $models = self::getModels($this->query, $this->limit, $page);

        return $this->render('index', [
            'totalPages' => $totalPages,
            'models' => $models,
            'page' => $page,
            'slickData' => self::getSlickData($this->query, $this->limit, $page),
        ]);
    }

    private static function getModels($query, $limit, $page)
    {
        $startingLimit = ($page - 1) * $limit;

        return $query->limit($limit)->offset($startingLimit)->all();
    }

    private static function getTotalPages($query, $limit)
    {
        $totalResults = $query->count();

        return ceil($totalResults / $limit);
    }

    public static function getSlickData($query, $limit, $page = null)
    {
        if(!$query) {
            return null;
        }
        if(!$page) {
            Yii::$app->request->get('page') ? $page = Yii::$app->request->get('page') : $page = 1;
        }
        $data = [];
        $models = self::getModels($query, $limit, $page);
        foreach ($models as $model) {
            $data[] = [
                'field1' => $model->field1,
                'field2' => $model->field2,
                'field3' => $model->field3,
            ];
        }

        return json_encode($data);
    }
}