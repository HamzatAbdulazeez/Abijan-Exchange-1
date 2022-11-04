<?php

if (! function_exists('baseUrl')) {
    function baseUrl() {
        return config('app.base_url');
    }
}


if (! function_exists('adminUrl')) {
    function adminUrl() {
        return config('app.admin_surl') . '.' . baseUrl();
    }
}

if (!function_exists("getCurrentBtcDollar")) {
    function getCurrentBtcDollar() {
        //
        /* $url='https://bitpay.com/api/rates';
        $json=json_decode( file_get_contents( $url ) );
        $btc=0; */
        $response = \Illuminate\Support\Facades\Http::get('https://bitpay.com/api/rates/USD');

        return $response->object()->rate;
    }
}

if (!function_exists("settings")) {
    function settings() {
        //
        $settings = \App\Models\Setting::where('id', 1)->first();

        return $settings;
    }
}

?>
