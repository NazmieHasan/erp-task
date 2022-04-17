<?php

namespace App\Service;


use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BaseService {

    private $session = null;

    public function __construct() {
        $this->login();
    }

    public function __desctuct() {
        $this->logout();
    }

    public function getSessionId() {
        return $this->session;
    }

    public function setSessionId($sessionId) {
        $this->session = $sessionId;
        return true;
    }

    private function login() {
        //TODO get credentials from environment
        $app = config('APP');
        $user = config('USER');
        $pass = config('PASS');
        $lang = config('LANG');
               
        $client = new Client();
        $response = $client->request('POST', 'https://demodb.my.erp.net/api/domain/Login', [
            'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
            'body'    => '{"user":"Admin", "pass":"123"}'
        ]);     

        $result = $response->getBody()->getContents();
        dd($result);
        
        dd($response);
        
    }
    
    private function logout() {
        //TODO implement logout functionality
        $client = new Client();
        $response = $client->request('POST', 'https://demodb.my.erp.net/api/domain/Logout');
        
        // unset sessionId
    }

} 
