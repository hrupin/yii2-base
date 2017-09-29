<?php
namespace hrupin\base;

use Yii;
use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    const VERSION = '0.0.1';

    public $modelMap = [];
    public $userModel;
    public $urlPrefix = 'base';
    public $debug = false;
}