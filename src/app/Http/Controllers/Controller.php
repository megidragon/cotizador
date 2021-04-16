<?php /** @noinspection ALL */

/** @noinspection ALL */

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function successApiResponse($response=[]) {
        return response()->ApiSuccess(HTTP_STATUS_SUCCESS, null, $response);
    }

    protected function successResourceResponse($resource)
    {
        return response()->ApiResourceResponse($resource, 200);
    }

    protected function successCollectionResponse($resource)
    {
        return response()->ApiCollectionResponse($resource, 200);
    }
}
