<?php

namespace RedisApi;

class GetString
{
    public static function execute($key)
    {
        $redis = RedisClient::connect();
        return $redis->get($key) ?? "Key not found.";
    }
}
