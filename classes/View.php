<?php
/**
 * Created by PhpStorm.
 * User: i
 * Date: 14.02.2019
 * Time: 10:43
 */

namespace Leon;

class View
{
    private function toJson($input){
        return json_encode($input);
    }

    public function toOutput($input){
        echo self::toJson($input);
    }
}