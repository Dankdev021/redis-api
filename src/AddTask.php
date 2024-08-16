<?php

namespace RedisApi;

class AddTask
{
    public static function execute($task)
    {
        $redis = RedisClient::connect();
        $redis->rpush('tasks', $task);
        return "Task added!";
    }
}
