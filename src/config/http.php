<?php

/*
|--------------------------------------------------------------------------
| HTTP STATUS
|--------------------------------------------------------------------------
|
|
|
|
|
*/
if (!defined('HTTP_STATUS_BAD_REQUEST')) define('HTTP_STATUS_BAD_REQUEST', 400);
if (!defined('HTTP_STATUS_UNAUTHORIZED')) define('HTTP_STATUS_UNAUTHORIZED', 401);
if (!defined('HTTP_STATUS_FORBIDDEN')) define('HTTP_STATUS_FORBIDDEN', 403);
if (!defined('HTTP_STATUS_NOT_FOUND')) define('HTTP_STATUS_NOT_FOUND', 404);
if (!defined('HTTP_STATUS_NOT_ALLOWED')) define('HTTP_STATUS_NOT_ALLOWED', 405);
if (!defined('HTTP_STATUS_NOT_ACCEPTABLE')) define('HTTP_STATUS_NOT_ACCEPTABLE', 406);
if (!defined('HTTP_STATUS_UNPROCESSABLE_ENTRY')) define('HTTP_STATUS_UNPROCESSABLE_ENTRY', 422);
if (!defined('HTTP_STATUS_TOO_MANY_REQUESTS')) define('HTTP_STATUS_TOO_MANY_REQUESTS', 429);
if (!defined('HTTP_STATUS_SERVER_ERROR')) define('HTTP_STATUS_SERVER_ERROR', 500);
if (!defined('HTTP_STATUS_SUCCESS')) define('HTTP_STATUS_SUCCESS', 200);
if (!defined('HTTP_STATUS_SUCCESS_NO_CONTENT')) define('HTTP_STATUS_SUCCESS_NO_CONTENT', 204);
