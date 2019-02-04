<?php

namespace kv4nt\yii2repeater\actions;

use Yii;
use yii\base\Action;
use yii\db\ActiveRecord;
use yii\web\Response;

class DeleteAction extends Action
{

    /**
     * @var string full name of Model class
     */
    public $model;

    public function run()
    {
        $id       = \Yii::$app->request->post('id');
        $model    = $this->model;
        /** @var ActiveRecord $model */
        $model    = $model::findOne($id);
        $response = 0;
        if ($model)
        {
            $response = $model->delete();
        }

        Yii::$app->response->format = Response::FORMAT_JSON;
        return ['status' => $response];
    }

}
