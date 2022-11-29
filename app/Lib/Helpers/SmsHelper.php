<?php
namespace App\Lib\Helpers;

use App\Lib\Helpers\LogHelper;
use Illuminate\Support\Facades\Http;

class SmsHelper {

    public static function sendSms(string $mobile_number, string $msg_body) {
        $login      = config('custom.sms.login');
        $password   = config('custom.sms.password');
        $sender     = config('custom.sms.sender');
        $key        = md5(md5($password) . $login . $msg_body . $mobile_number . $sender);

        $url = config('custom.sms.url');
        $url .= '/send/?login=' . $login;
        $url .= '&msisdn=' . $mobile_number;
        $url .= '&text=' . $msg_body;
        $url .= '&sender=' . $sender;
        $url .= '&key=' . $key;

        try {
            LogHelper::info("SmsHelper.SendSms started");
            LogHelper::info("Url: " . $url);

            $response = Http::get($url);

            LogHelper::info("SendSms Response: " . $response);
            LogHelper::info("SmsHelper.SendSms ended");
        } catch (\Throwable $th) {
            LogHelper::error($th);
            LogHelper::info("SmsHelper.SendSms ended");
            throw $th;
        }

        return $response;
    }
}
