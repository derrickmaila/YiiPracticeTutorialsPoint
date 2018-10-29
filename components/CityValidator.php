<?php
/**
 * Created by PhpStorm.
 * User: Derrick
 * Date: 2018/10/26
 * Time: 11:33
 */

namespace  app\components;
use yii\validators\Validator;
class CityValidator extends Validator{
    public function validateAttribute($model, $attribute)
    {
        if(!in_array($model->$attribute,['Paris','London'])){
            $this->addError($attribute,'The city must be either "London" or "Paris".');
        }
    }
}
?>