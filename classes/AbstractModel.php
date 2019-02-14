<?php

namespace Leon;

abstract class AbstractModel
{
    abstract protected static function getRate();

    abstract public static function calcExchange($amount);
}