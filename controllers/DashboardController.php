<?php
/**
 * Created by PhpStorm.
 * User: lxl
 * Date: 2018/5/18
 * Time: 下午1:58
 */

namespace app\controllers;


use yii\filters\auth\HttpBearerAuth;

/**
 * 控制台控制器
 * Class DashboardController
 * @package app\controllers
 */
class DashboardController extends BaseController
{

    public function behaviors(){

        $behaviors = parent::behaviors();

        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::className(),
        ];

        return $behaviors;

    }

    public function actionIndex(){




    }


}