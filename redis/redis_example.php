<?php

require "predis/autoload.php";
try {
    Predis\Autoloader::register();
    $redis = new Predis\Client();

//    HASH EXAMPLES
//
//    $redis->hset('change:GBP', 'amount', 1);
//    $redis->hset('change:GBP', 'time', '2023-11-02 16:12:10');
//    $gbpChange = $redis->hgetall('change:GBP');
//    var_dump($gbpChange) . PHP_EOL;
//
//    $redis->hmset('change:USD', [
//        'amount' => 3,
//        'time' => '2023-11-13 13:24:22'
//    ]);
//    $usdChange = $redis->hgetall('change:USD');
//    var_dump($usdChange) . PHP_EOL;
//
//    $getAmountUsd = $redis->hget('change:USD', 'amount');
//    echo $getAmountUsd . PHP_EOL;
//
//    $len = $redis->hlen('change:GBP');
//    echo $len . PHP_EOL;
//
//    $redis->hdel('change:GBP', 'amount');
//    $gbpChange = $redis->hgetall('change:GBP');
//    var_dump($gbpChange) . PHP_EOL;
//
//    $exists = $redis->hexists('change:GBP', 'amount');
//    echo $exists . PHP_EOL;
//
//    $key = 'Jeny Osmolovets';
//
//    $redis->hset($key, 'age', 23);
//    $redis->hset($key, 'country', 'Belarus');
//    $redis->hset($key, 'occupation', 'barista');
//
//    echo $redis->hget($key, 'age');
//    echo PHP_EOL;
//    echo $redis->hget($key, 'country');
//    echo PHP_EOL;
//
//    $redis->del($key, 'age');
//
//    echo $redis->hincrby($key, 'age', 23);
//    echo PHP_EOL;
//    echo $redis->hincrby($key, 'age', 10);
//    echo PHP_EOL;
//    $redis->hmset($key, [
//        'age' => 23,
//        'country' => 'Belarus',
//        'occupation' => 'barista',
//    ]);
////
//    $data = $redis->hgetall($key);
//    var_dump($data) . PHP_EOL;
//    echo $redis->hincrby($key, 'age', 10);

//    LIST EXAMPLES
//
//    $redis->del('popular');
//
//    $redis->rpush('popular', 'GBR');
//    $redis->lpush('popular', 'USD', 'USD', 'EUR');
//    $redis->lset('popular', 1, 'JPY');
//
//    $redis->lrem('popular', 1, 'USD');
//    $redis->rpop('popular');
//
//    $populars = $redis->lrange('popular', 1, 2);
//    $populars = $redis->lindex('popular', 2);
//    $popularLenght = $redis->llen('popular');
//    $populars = $redis->lrange('popular', 0, -1);
//    var_dump($populars);
//    var_dump($redis->keys('*'));
//
//
//    $redis->del('languages');
//
//    $redis->rpush('languages', 'C#');//c#
//    $redis->rpush('languages', 'PHP');//c#,PHP
//
//    $redis->lpush('languages', 'Python');//python,c#,PHP
//    $redis->lpush('languages', 'Java');//Java,python,c#,php
//
//    echo $redis->lpop('languages');//echo Java; python,c#,php
//    echo PHP_EOL;
//    echo $redis->rpop('languages');//echo php; python,c#
//    echo PHP_EOL;
//    echo $redis->llen('languages');// 2
//    echo PHP_EOL;
//    print_r($redis->lrange('languages', 0, -1));

//      STRING EXAMPLES
//    $redis->set('rate:GBR', 92);
//    $redis->set('rate:USD', 77);
//    $redis->mset([
//        'rate:EUR' => 80,
//        'rate:JPY' => 60
//    ]);
//    $redis->set('description:GBR', 'Pound sterling');
//    $redis->set('description:USD', 'United State dollar');
//
//    $exists = $redis->exists('rate:EU');
//    echo "If 1 - exists, if 0 - not exists. EUR is $exists" . PHP_EOL;
//    $usd = $redis->get('rate:USD');
//    echo "Now USD is $usd" . PHP_EOL;
//    $descr = $redis->get('description:GBR');
//    echo "GBR is - $descr" . PHP_EOL;
//    $mget = $redis->mget([
//        'rate:GBR',
//        'rate:JPY'
//    ]);
//    var_dump($mget) . PHP_EOL;
//    $ttl = $redis->ttl('rate:JPY');
//    echo "Time to live JPY $ttl" . PHP_EOL;
//
//    $delete = $redis->del('description:GBR');
//    echo $delete . PHP_EOL;
//    $descrExists = $redis->exists('description:GBR');
//    echo "If 1 - exists, if 0 - not exists. Key description:GBR is - $descrExists" . PHP_EOL;
//
//    $newValue = $redis->incr('rate:EUR');
//    echo "New value for EUR now - $newValue" . PHP_EOL;
//    $newValue = $redis->decrby('rate:JPY', 30);
//    echo "New value for JPY now - $newValue" . PHP_EOL;
//    $newValue = $redis->incrbyfloat('rate:USD', 2.39);
//    echo "New value for USD now - $newValue" . PHP_EOL;
//
//    $redis->append('rate:USD', '$');
//    $newUsd = $redis->get('rate:USD');
//    echo "Now USD is $newUsd" . PHP_EOL;
//    $value = $redis->getrange('description:USD', 0, 5);
//    echo $value . PHP_EOL;
//    $redis->setrange('description:USD', 13, 'Dollar');
//    $value = $redis->get('description:USD');
//    echo $value;
//
//    print_r($redis->keys('*'));
//    $redis->flushall();
//
//
//    сэт экзистс и гет значения по ключу
//    $redis->set('name', 'Jeny');
//    if ($redis->exists('name')) {
//        $name = $redis->get('name');
//        echo "Name is $name";
//        echo PHP_EOL;
//    }
//    //сэт инкр декр гет значений по ключу
//    $redis->set('counter', 0);
//    $redis->incr('counter');
//    $counter = $redis->get('counter');
//    echo "Counter is $counter";
//    echo PHP_EOL;
//    $redis->incr('counter');
//    $counter = $redis->get('counter');
//    echo "Counter is $counter";
//    echo PHP_EOL;
//    $redis->decr('counter');
//    $counter = $redis->get('counter');
//    echo "Counter is $counter";
//    echo PHP_EOL;
//    $redis->incrby('counter', 15);
//    $counter = $redis->get('counter');
//    echo "Counter is $counter";
//    echo PHP_EOL;
//    $redis->incrby('counter', 5);
//    $counter = $redis->get('counter');
//    echo "Counter is $counter";
//    echo PHP_EOL;
//    $redis->decrby('counter', 10);
//    $counter = $redis->get('counter');
//    echo "Counter is $counter";
//    echo PHP_EOL;
} catch (Exception $e) {
    die($e->getMessage());
}