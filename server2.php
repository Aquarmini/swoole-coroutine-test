<?php

require 'vendor/autoload.php';

class Counter
{
    use \Xin\Traits\Common\InstanceTrait;

    public $i = 0;

    public function incr()
    {
        return $this->i++;
    }

    public function get()
    {
        return $this->i;
    }
}

$http = new swoole_http_server('0.0.0.0', '8080');
$http->set([
    'dispatch_mode' => 3,
    'worker_num' => 1,
]);
$http->on('workerStart', function () {
});
$http->on('request', function ($request, $response) {
    Counter::getInstance()->incr();
    \co::sleep(1);
    $response->end(Counter::getInstance()->get());
});
echo 'swoole http server start.' . PHP_EOL;
$http->start();
