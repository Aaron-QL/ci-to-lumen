<?php
/**
 * Created by PhpStorm.
 * User: akaqin
 * Date: 2019-01-25
 * Time: 16:36
 */

namespace src\Concerns;


trait ContainerProxy
{
    public function __get($name)
    {
        return app()->$name;
    }
}