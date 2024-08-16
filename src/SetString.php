<?php

namespace RedisApi;

class SetString
{
    public static function execute($key, $value)
    {
        $redis = RedisClient::connect();
        $redis->set($key, $value);
        return "String set successfully!";
    }
}
