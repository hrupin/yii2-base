<?php
namespace hrupin\base\filters;

use yii\base\ActionFilter;
use yii\web\NotFoundHttpException;

class BackendFilter extends ActionFilter
{

    public $controllers = [];

    public function beforeAction($action)
    {
        if (in_array($action->controller->id, $this->controllers)) {
            throw new NotFoundHttpException('Not found');
        }
        return true;
    }
}