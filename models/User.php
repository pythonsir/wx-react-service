<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;


/**
 * This is the model class for table "{{%_user}}".
 *
 * @property int $id
 * @property string $user_name
 * @property string $password_hash
 * @property int $created_at
 * @property int $updated_at
 * @property int $status
 * @property string $access_token
 * @property int $last_login_time
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{


    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'status','last_login_time'], 'integer'],
            [['user_name', 'password_hash','access_token'], 'string', 'max' => 255],
            [['id','user_name'], 'unique'],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(["id"=>$id]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {

        return static::findOne(['access_token'=>$token]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $model = static::findOne(['user_name'=>$username]);

        return $model;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {

        return Yii::$app->getSecurity()->validatePassword($password, $this->password_hash);
    }


    public static  function  addUser($username,$status,$password){

        $user = new self();

        $user -> id = time();

        $user -> user_name = $username;

        $user ->password_hash = Yii::$app->getSecurity()->generatePasswordHash($password);

        $user->status = $status;

        $flag = $user -> save();

        return $flag;

    }

    public static function findUserByUsername($username){

        return  static::findOne(["user_name"=>$username]);

    }

}
