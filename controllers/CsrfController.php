<?php
/**
 * Created by PhpStorm.
 * User: lxl
 * Date: 2018/5/17
 * Time: 下午1:30
 */

namespace app\controllers;


use yii\helpers\Json;
use yii\web\Controller;

class CsrfController extends BaseController
{






    public function actionIndex(){

        $csrf = \Yii::$app->request->csrfToken;

            return Json::encode(array("apicsrf"=>$csrf));

    }


}