<?php
/**
 * Created by PhpStorm.
 * User: xu
 * Date: 2019/7/16
 * Time: 14:13
 */

namespace Validator;

/**
 * Class Model
 * @bean(name="modelValidator", scope=Bean::PROTOTYPE)
 * @package Validator
 */
class Model
{
    private $_errors=[];
    public function setAttributes(array $data)
    {
        foreach ($data as $key=>$item){
            $this->$key=$item;
        }
    }
    public function addError(string $attribute,$message)
    {
        array_push($this->_errors,[$attribute=>$message]);
    }
    public function getFirstError()
    {
        return $this->_errors[0];
    }
    public function getErrors()
    {
        return $this->_errors;
    }

}