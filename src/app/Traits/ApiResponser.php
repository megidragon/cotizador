<?php
namespace App\Traits;

trait ApiResponser{

    protected function successResponse($data, $message = null, $code = 200)
    {
        $code = $code ?: 200;
        return response()->json([
            'type' => 'success',
            'status'=> $code,
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function errorResponse($message = null, int $code=500, $trace=null)
    {
        $code = $code > 0 || $code < 500 ? $code : 500;
        return response()->json([
            'type' => 'error',
            'status'=> $code,
            'message' => $message,
            'data' => null,
            'error' => $trace
        ], $code);
    }

}
