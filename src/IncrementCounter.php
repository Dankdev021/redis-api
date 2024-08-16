<?php

namespace RedisApi;

class IncrementCounter
{
    public static function execute($key)
    {
        $redis = RedisClient::connect();
        $redis->incr($key);
        return "Counter incremented!";
    }
}
