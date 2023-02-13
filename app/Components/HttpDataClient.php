<?php
/**
 * Created by PhpStorm.
 * User: almasamirgaliyev
 * Date: 13.01.2023
 * Time: 19:38
 */

namespace App\Components;


use GuzzleHttp\Client;

class HttpDataClient
{
    public $client;

    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://httpbin.org',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
    }

}