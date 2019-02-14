<?php
namespace Leon;

use Fadion\Fixerio\Exchange;

class Model extends AbstractModel
{
    const ACCESS_KEY = '1ae5669c0e1e9e17dfa58c41416bcc27';
    const CURRENCY_FROM = 'EUR';
    const CURRENCY_TO = 'CNY';

    static function getRate(){
        $exchange = new Exchange();
        $exchange->key(self::ACCESS_KEY);
        $exchange->base(self::CURRENCY_FROM);
        $exchange->symbols(self::CURRENCY_TO);
        $tmp = $exchange->get();
        return $tmp[self::CURRENCY_TO];
    }

    static function calcExchange($amount){
        return round((self::getRate() * $amount), 2);
    }
}