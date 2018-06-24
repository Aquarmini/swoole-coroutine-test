<?php
// +----------------------------------------------------------------------
// | Counter.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Biz;

use Xin\Traits\Common\InstanceTrait;

class Counter
{
    use InstanceTrait;

    public $i = 0;

    public function incr()
    {
        return $this->i++;
    }
}