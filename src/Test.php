<?php
/**
 * Created by PhpStorm.
 * User: xu
 * Date: 2019/7/13
 * Time: 18:32
 */

namespace Validator;


class Test
{
    public static function index()
    {
        $t=new Text2(3);
        return $t->index;
    }
}