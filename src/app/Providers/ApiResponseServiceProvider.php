<?php

namespace App\Providers;

use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Routing\ResponseFactory;


class ApiResponseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(ResponseFactory $factory)
    {   /**
        * @param $status
        * @param $error_code
        * @param $message
        * @param $error_content
        * @return \Illuminate\Http\JsonResponse
        */
        $factory->macro('ApiError', function ($status, $error_code, $message, $error_content) use ($factory) {
            if (gettype($error_content) == 'string'){
                $ErrorFormat = [
                    'type' => 'error',
                    'status' => $status,
                    'code' => $error_code,
                    'message' => $message,
                    'description' => $error_content
                ];
            }elseif (gettype($error_content) == 'array'){
                $ErrorFormat = [
                    'type' => 'error',
                    'status' => $status,
                    'code' => $error_code,
                    'message' => $message,
                    'errors' => $error_content
                ];
            }

            return $factory->json($ErrorFormat, $status);
        });

        $factory->macro('ApiSuccess', function ($status, $message = null, $data = null) use ($factory) {
            $SuccessFormat = [
                'type' => 'success',
                'status' =>  $status,
                'message' => $message,
                'data' => $data

            ];
            return $factory->json($SuccessFormat, $status);
        });

	    $factory->macro('ApiResourceResponse', function ($data = null, $status = 200) use ($factory) {
		    return $factory->json(['data' => $data], $status);
	    });

        $factory->macro('ApiCollectionResponse', function ($data = null, $status = 200) use ($factory) {
            return $factory->json($data, $status);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
