<?php

namespace RedisApi;

class GetSet
{
    public static function execute($key)
    {
        $redis = RedisClient::connect();
        $set = $redis->smembers($key);
        return $set ? "Set members: " . implode(', ', $set) : "Set not found.";
    }
}
