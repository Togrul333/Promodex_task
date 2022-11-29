<?php
namespace App\Lib\Helpers;

use Throwable;
use Illuminate\Support\Facades\Log;

class LogHelper {

    public static function error(Throwable $th, $data = null, $errors = []) {
        $text = "\n";
        $text .= "Url: " . request()->getUri() . "\n";
        $text .= "Method: " . request()->getMethod() . "\n";
        $text .= "Error File: " . $th->getFile() . "\n";
        $text .= "Error Line: " . $th->getLine() . "\n";
        $text .= "Error Message: " . $th->getMessage() . "\n";
        $text .= "Exception: " . $th::class . "\n";
        $text .= "Data: " . json_encode($data) . "\n";
        $text .= "Validation Errors: " . json_encode($errors) . "\n";
        Log::error($text);
    }

    public static function info(string|array $msg) {
        if(is_array($msg))
            $msg = json_encode($msg);
        Log::info($msg);
    }

    public static function warning(string|array $msg) {
        if(is_array($msg))
            $msg = json_encode($msg);
        Log::warning($msg);
    }

}
