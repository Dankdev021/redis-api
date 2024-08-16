<?php

namespace RedisApi;

class SetHash
{
    public static function execute($key, $data)
    {
        $redis = RedisClient::connect();
        $redis->hmset($key, $data);
        return "Hash set successfully!";
    }
}
