<?php

namespace RedisApi;

class PublishMessage
{
    public static function execute($channel, $message)
    {
        $redis = RedisClient::connect();
        $redis->publish($channel, $message);
        return "Message published!";
    }
}
