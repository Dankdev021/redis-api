<?php

require __DIR__ . '/../vendor/autoload.php';

use RedisApi\SetString;
use RedisApi\GetString;
use RedisApi\AddTask;
use RedisApi\GetTasks;
use RedisApi\SetHash;
use RedisApi\GetHash;
use RedisApi\AddSet;
use RedisApi\GetSet;
use RedisApi\IncrementCounter;
use RedisApi\PublishMessage;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$response = match ($uri) {
    '/set-string' => SetString::execute('greeting', 'Hello, Redis!'),
    '/get-string' => GetString::execute('greeting'),
    '/add-task' => AddTask::execute($_GET['task'] ?? 'Default Task'),
    '/get-tasks' => GetTasks::execute(),
    '/set-hash' => SetHash::execute('user:1000', ['name' => 'Daniel', 'email' => 'daniel@example.com']),
    '/get-hash' => GetHash::execute('user:1000'),
    '/add-set' => AddSet::execute('colors', 'red'),
    '/get-set' => GetSet::execute('colors'),
    '/increment-counter' => IncrementCounter::execute('pageviews'),
    '/publish-message' => PublishMessage::execute('channel', 'Hello, Daniel!'),
    default => "Bem vindo a minha Redis API!",
};

echo $response;
