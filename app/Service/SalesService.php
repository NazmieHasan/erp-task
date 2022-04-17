<?php

namespace App\Service;


use App\Service\BaseService;
use GuzzleHttp\Client;

class SalesService extends BaseService {

    public function readSale($id) {
        //TODO implement read sale with id
        $client = new Client();
        $response = $client->request('GET','https://demodb.my.erp.net/api/domain/odata/Crm_Sales_SalesOrders(70c5792a-9d51-4c67-b90b-96ba79c0c9b1)', [
            'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
            'body'    => '{"user":"Admin", "pass":"123"}'
        ]);

        $result = $response->getBody()->getContents();
        dd($result);
        
        // dd($response); 
        // GuzzleHttp \ Exception \ ServerException (500)
        // The maximum number of simultaneously connected users to this server is exceeded.
    } 

} 
