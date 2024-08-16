<?php

namespace RedisApi;

class GetTasks
{
    public static function execute()
    {
        $redis = RedisClient::connect();
        $tasks = $redis->lrange('tasks', 0, -1);
        return $tasks ? "Tasks: " . implode(', ', $tasks) : "No tasks found.";
    }
}
