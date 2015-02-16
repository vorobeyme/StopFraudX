<?php

namespace api\modules\v1;

class ApiModule extends \yii\base\Module
{
    public $controllerNamespace = 'api\modules\v1\controllers';
    public function init()
    {
        parent::init();        
    }
}