<?php
/**
 * Created by PhpStorm.
 * User: Derrick
 * Date: 2018/10/26
 * Time: 08:24
 */

namespace app\models;
use yii\base\Model;

class RegistrationFrom extends Model{
    public $username;
    public $password;
    public $email;
    public $country;
    public $city;
    public $phone;
    public $subscriptions;
    public $photos;

    public function rules(){
        return [
            // the username, password, email, country, city, and phone attributes are
            //required
            [['username' ,'password', 'email', 'country', 'city', 'phone','subscriptions'], 'required'],
            // the email attribute should be a valid email address
            ['email', 'email'],
            ['photos','file','message' => 'File is not uploaded.'],
        ];
    }

    public function attributeLabels()
    {
        return [
             'username' => 'username',
             'password' => 'password',
             'email' => 'email',
             'country' => 'country',
             'city' => 'city',
             'phone' => 'phone',
             'subscriptions' => 'subscriptions',
             'photos' => 'photos',
        ];
    }
}
?>