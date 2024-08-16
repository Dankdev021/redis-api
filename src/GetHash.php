<?php

namespace RedisApi;

class GetHash
{
    public static function execute($key)
    {
        $redis = RedisClient::connect();
        $hash = $redis->hgetall($key);
        return $hash ? "Hash: " . implode(', ', $hash) : "Hash not found.";
    }
}
