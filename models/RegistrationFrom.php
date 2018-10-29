<?php
/**
 * Created by PhpStorm.
 * User: Derrick
 * Date: 2018/10/26
 * Time: 08:24
 */

namespace app\models;
use app\components\CityValidator;
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
          //  [['username','password', 'email', 'country', 'city', 'phone','subscriptions'], 'required'],
            // the email attribute should be a valid email address
            ['username','required','message' => 'Username is required'],
            ['password','required','message' => 'password is required'],
            ['country','required','message' => 'country is required'],
            ['city','required','message' => 'city is required'],
            //['city','validateCity'],
            ['city',CityValidator::className()],
            ['phone','required','message' => 'phone is required'],
            [['phone'], 'udokmeci\yii2PhoneValidator\PhoneValidator'],
            ['subscriptions','required','message' => 'subscriptions is required'],
            ['email','required', 'message' => 'email is required'],
            ['photos','required', 'message' => 'photos is required'],
        ];
    }

    public function validateCity($attribute, $params){
        if(!in_array($this->$attribute,['Paris','London'])){
            $this->addError($attribute,'The city must be either "London" or "Paris".');
        }
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