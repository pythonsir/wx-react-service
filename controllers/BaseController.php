<?php
/**
 * Created by PhpStorm.
 * User: lxl
 * Date: 2018/5/17
 * Time: 下午2:41
 */

namespace app\controllers;


use yii\base\Controller;

class BaseController extends Controller
{

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // add CORS filter
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
            'cors' => [
                // restrict access to
                'Origin' => \Yii::$app->params['acao'],
                'Access-Control-Request-Headers' => ['*'],
                'Access-Control-Request-Method' => ['GET', 'POST', 'OPTIONS'],
            ],

        ];

        return $behaviors;
    }


}