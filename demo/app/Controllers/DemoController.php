<?php
/**
 * Created by PhpStorm.
 * User: akaqin
 * Date: 2019-01-17
 * Time: 16:03
 */

namespace App\Controllers;


use App\Logics\BaseLogic;
use Illuminate\Http\Request;

class DemoController extends BaseController
{
    public function __construct(BaseLogic $l)
    {
        $this->l = $l;
    }

    public function test(Request $request)
    {
        return $this->success();
    }
}