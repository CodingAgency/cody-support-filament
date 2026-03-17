<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cody API Token
    |--------------------------------------------------------------------------
    |
    | Your Cody.support API token. Generate one at https://cody.support
    |
    */

    'api_token' => env('CODY_API_TOKEN'),

    /*
    |--------------------------------------------------------------------------
    | Project Key
    |--------------------------------------------------------------------------
    |
    | The project key to associate issues with in Cody.support.
    |
    */

    'project_key' => env('CODY_PROJECT_KEY'),

    /*
    |--------------------------------------------------------------------------
    | API URL
    |--------------------------------------------------------------------------
    |
    | The base URL for the Cody.support API.
    |
    */

    'api_url' => env('CODY_API_URL', 'https://cody.support/api/v1'),

];
