<?php

namespace RedisApi;

class AddSet
{
    public static function execute($key, $value)
    {
        $redis = RedisClient::connect();
        $redis->sadd($key, $value);
        return "Value added to set!";
    }
}
