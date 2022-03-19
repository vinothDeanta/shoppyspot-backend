<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_users".
 *
 * @property int $id
 * @property string $user_email
 * @property string $username
 * @property string $last_name
 * @property string|null $phone_no
 * @property string|null $city
 * @property string|null $authKey
 * @property string|null $accessToken
 * @property string $password
 */
class Users extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_email', 'username', 'last_name', 'password'], 'required'],
            [['user_email', 'username', 'last_name', 'phone_no', 'city', 'authKey', 'accessToken', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_email' => 'Email Address',
            'username' => 'Username',
            'last_name' => 'Last Name',
            'phone_no' => 'Phone No',
            'city' => 'City',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'password' => 'Password',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return self::findOne(['accessToken'=>$token]);
    }

      /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return self::findOne(['username'=>$username]);
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
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return password_verify($password, $this->password);
    }

}
