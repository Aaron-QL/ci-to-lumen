<?php
/**
 * Created by PhpStorm.
 * User: akaqin
 * Date: 2019-01-14
 * Time: 15:01
 */

namespace App\Logics;

use App\Controllers\DemoController;


class BaseLogic
{
    public function __construct(DemoController $c)
    {
        $this->c = $c;
    }
}