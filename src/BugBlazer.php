<?php

namespace BugBlazer;

use BugBlazer\Exceptions\BugBlazerException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Jenssegers\Agent\Agent;
use Throwable;

class BugBlazer
{
    /**
     * @throws BugBlazerException
     */
    public static function capture(Throwable $e): ?Response
    {
        if (!config('bug-blazer.enabled')) {
            return null;
        }
        if (config('bug-blazer.endpoint') && config('bug-blazer.environment')) {
            throw new BugBlazerException(__('BugBlazer is not configured properly.'));
        }

        $agent = new Agent();

        $data = [
            'environment' => config('bug-blazer.environment'),
            'type' => 'error',
            'exception' => get_class($e),
            'code' => $e->getCode() ?: 500,
            'message' => $e->getMessage(),
            'trace' => $e->getTrace(),
            'filename' => $e->getFile(),
            'line' => $e->getLine(),
            'request_method' => request()->method(),
            'request_host' => request()->host(),
            'request_path' => request()->path(),
            'request_headers' => request()->header(),
            'request_params' => request()->all(),
            'browser_name' => $agent->browser() ?: 'unknown',
            'browser_version' => $agent->version($agent->browser()) ?: 'unknown',
            'os_name' => $agent->platform() ?: 'unknown',
            'os_version' => $agent->version($agent->platform()) ?: 'unknown',
            'os_kernel_version' => php_uname('v'),
            'device_brand' => $agent->device() ?: 'unknown',
            'device_family' => $agent->deviceType() ?: 'unknown',
            'device_model' => $agent->deviceType() ?: 'unknown',
            'runtime_name' => 'php',
            'runtime_version' => phpversion(),
            'server_name' => gethostname(),
        ];

        return Http::post(config('bug-blazer.endpoint'), $data);
    }
}
