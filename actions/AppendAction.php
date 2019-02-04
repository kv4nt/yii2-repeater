<?php

namespace kv4nt\yii2repeater\actions;

use yii\base\Action;

class AppendAction extends Action
{

    /**
     * @var string full name of Model class
     */
    public $model;
    public $contentPath;

    public function run()
    {
        $this->controller->viewPath = dirname(__DIR__) . '/views';
        $id                         = \Yii::$app->request->post('id');
        $model                      = new $this->model();
        return $this->controller->renderPartial('repeater', ['model' => $model, 'contentPath' => $this->contentPath, 'id' => $id]);
    }

}
