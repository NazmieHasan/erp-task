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
        $lang = congig('LANG');
               
        $client = new Client();
        $response = $client->request('POST', 'https://demodb.my.erp.net/api/domain/Login', [
            'form_params' => [
                'app' => '$app',
                'user' => '$user',
                'password' => '$pass',
                'lang' => '$lang',
            ]
        ]);
        
        // headers: 'Content-Type' => 'application'/json
        // session 

        $result = $response->getBody();
        dd($result);
        
    }
    
    private function logout() {
        //TODO implement logout functionality
    }

} 
