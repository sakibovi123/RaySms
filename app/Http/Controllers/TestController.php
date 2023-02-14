<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use \GuzzleHttp\Psr7\Request;

class TestController extends Controller
{
    public function get_ringba_numbers () {
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Token 09f0c9f0935283360f607645be5cf09d69c6980b5f800c30d130e074db665a5eff8ddfe8ab25207d0e33ec8a55051e683bcd24dc1ad059ddf578d3866d3c8332dd86a3763bb5abbf6a30ced11aa66eb12f307556c3f7b3970dcd19e10b6ac3b746d048d4f73836244d7cddca8c4befb5415f63bd'
        ];


        $body = '{
                "reportEnd": "2021-02-04T07:59:59Z",
                "reportStart": "2021-02-01T08:00:00Z",
                "filters": [
                    {
                        "anyConditionToMatch": [
                            {
                                "column": "tag:Date:Day",
                                "value": "1",
                                "isNegativeMatch": false,
                                "comparisonType": "EQUALS"
                            },
                            {
                                "column": "tag:Date:Day",
                                "value": "3",
                                "isNegativeMatch": false,
                                "comparisonType": "EQUALS"
                            }
                        ]
                    },
                    {
                        "anyConditionToMatch": [
                            {
                                "column": "hasConnected",
                                "value": "yes",
                                "isNegativeMatch": false,
                                "comparisonType": "EQUALS"
                            }
                        ]
                    }
                ]
            }';

        $request = new Request('POST', 'https://api.ringba.com/v2/RA11a74d12f3d84ee6991853ff57608715/calllogs', $headers);

        $res = $client->sendAsync($request)->wait();
        echo $res->getBody();

    }
}
