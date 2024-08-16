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

if ($uri === '/set-string') {
    echo SetString::execute('greeting', 'Hello, Redis!');
} elseif ($uri === '/get-string') {
    echo GetString::execute('greeting');
} elseif ($uri === '/add-task') {
    $task = $_GET['task'] ?? 'Default Task';
    echo AddTask::execute($task);
} elseif ($uri === '/get-tasks') {
    echo GetTasks::execute();
} elseif ($uri === '/set-hash') {
    $data = ['name' => 'Daniel', 'email' => 'daniel@example.com'];
    echo SetHash::execute('user:1000', $data);
} elseif ($uri === '/get-hash') {
    echo GetHash::execute('user:1000');
} elseif ($uri === '/add-set') {
    echo AddSet::execute('colors', 'red');
} elseif ($uri === '/get-set') {
    echo GetSet::execute('colors');
} elseif ($uri === '/increment-counter') {
    echo IncrementCounter::execute('pageviews');
} elseif ($uri === '/publish-message') {
    echo PublishMessage::execute('channel', 'Hello, daniel!');
} else {
    echo "Bem vindo a minha Redis API!";
}
