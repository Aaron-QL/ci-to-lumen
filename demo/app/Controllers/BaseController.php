<?php

namespace Demo\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use OFashion\CFrame\Routing\Controller;
use src\Concerns\ContainerProxy;

class BaseController extends Controller
{
    use ContainerProxy;

    public function failed(string $msg = 'failed', array $data = [], int $code = 400)
    {
        return $this->success($data, $msg, $code);
    }

    public function success($data = [], string $msg = 'success', int $code = 0)
    {
        $responseData = [
            'code' => (Int)$code,
            'msg'  => (String)$msg,
            'data' => (Object)$data
        ];
        return response()->json($responseData);
    }

    protected function throwValidationException(Request $request, $validator)
    {
        $response = [
            'code' => 20001,
            'msg'  => $validator->errors()->first(),
            'data' => []
        ];
        throw new ValidationException($validator, $response);
    }

    protected function getGetData()
    {
        //@todo
    }

    protected function getPostData()
    {
        //@todo
    }
}
