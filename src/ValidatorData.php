<?php
/**
 * Created by PhpStorm.
 * User: xu
 * Date: 2019/7/15
 * Time: 19:07
 */

namespace Validator;


class ValidatorData
{
    public static function validator(array $data,array $rules)
    {
        $model=\Swoft::getBean('modelValidator');
        $model->setAttributes($data);
        foreach ($rules as $rule){
            $attribute=$rule[0];
            $type=$rule[1];
            $bean=\Swoft::getBean('my_'.$type.'_validator');
            $bean->validateAttribute($model,$attribute);
        }
        return $model;
    }
}