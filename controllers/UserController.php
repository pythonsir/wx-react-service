<?php
/**
 * Created by PhpStorm.
 * User: lxl
 * Date: 2018/5/13
 * Time: 下午11:11
 */

namespace app\controllers;


use app\models\User;
use yii\rest\ActiveController;

use yii\filters\auth\HttpBearerAuth;


use yii;

class UserController extends BaseController
{


    public function behaviors(){

        $behaviors = parent::behaviors();

        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::className(),
        ];

        return $behaviors;

    }


    /**
     * 创建用户
     * @return string
     */
    public function actionAdd(){

        $request = Yii::$app->request;

        $user_name= $request ->post("user_name");

        $status = $request->post('status');

        $password = $request->post('password');

        if(User::addUser($user_name,$status,$password)){

            $array=["status" => 200,];


        }else{

            $array=["status" => 201,];


        }

        return yii\helpers\Json::encode($array);
    }




}