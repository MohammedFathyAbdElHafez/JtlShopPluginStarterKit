<?php

namespace Plugin\JtlShopPluginStarterKit\Src\Middlewares;

use Plugin\JtlShopPluginStarterKit\Src\Validations\Alerts;
use Plugin\JtlShopPluginStarterKit\Src\Models\ApiCredentials;
use Plugin\JtlShopPluginStarterKit\Src\Support\Http\Request;

class CheckApiCredentials
{
    public static function handle()
    {

        $request = new Request;
        if (count($request->all()) > 1) {
            $credential     = new ApiCredentials;

            $searchForCredentials    = $credential->select(
                'api_credentials.business_account',
                'api_credentials.client_id',
                'api_credentials.secret_key',
            )->get();

            if (empty($searchForCredentials)) {
                Alerts::show('warning', ['Note: You have to store Api crderntials first.']);
            }
        }
    }
}
