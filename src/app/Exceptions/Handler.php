<?php
namespace App\Exceptions;

use App\Traits\ApiResponser;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    use ApiResponser;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param Exception|\Throwable $exception
     * @return void
     * @throws \Throwable
     */
    public function report(Exception|\Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param Request $request
     * @param Exception|\Throwable $exception
     * @return JsonResponse
     */
    public function render($request, Exception|\Throwable $exception): JsonResponse
    {
        try
        {
            return $this->handleException($exception);
        }catch (Exception $e)
        {
            return parent::render($request, $exception);
        }
    }

    /**
     * @param Exception|\Throwable $exception
     * @return JsonResponse
     */
    public function handleException(Exception|\Throwable $exception): JsonResponse
    {
        $code = 500;
        $message = $exception->getMessage();

        if (config('app.debug'))
        {
            try {
                return $this->errorResponse($message, $code, $exception->getTrace());
            } catch (Exception $e)
            {
                throw $exception;
            }
        }

        return $this->errorResponse('Unexpected Exception. Try again later', 500);

    }

    private function isJson($string): bool
    {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
}
