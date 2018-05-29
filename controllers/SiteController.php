<?php

namespace app\controllers;

use app\models\LoginForm;
use PHPUnit\Util\Log\JSON;
use Yii;
use yii\web\Controller;
use yii\web\Response;

use yii\filters\auth\HttpBasicAuth;

class SiteController extends BaseController
{



    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {

        $request = Yii::$app->request;

        $model = new LoginForm();

        $model->username = $request->post("username");

        $model->password=$request->post("password");

        $model->rememberMe = $request->post("rememberMe");

        if($model->validate() && $model -> login()){

              $access_token =  $model->saveAccessToken();

              $array = ["status" => 200,"access_token"=>$access_token];

              return \yii\helpers\Json::encode($array);

        }else{

            $array = ["status" => 401,"access_token"=>""];

            return \yii\helpers\Json::encode($array);
        }


    }


}
