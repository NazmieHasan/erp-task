<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GiphyController extends Controller
{
    private $giphy;
    
    public function __construct()
    {
        $this->auth = [
            'api_key' => 'HZ3dvMtHdWK2MRUWbyuIRcyf5ZTciRfT', 
        ];
        
        $this->giphy = new Client([
             'base_uri' => 'https://api.giphy.com',
             'headers' => $this->auth,
        ]);
    }
    
    public function getGifs() {
        
        $response = $this->giphy->request('GET','v1/gifs/trending?api_key=$auth&limit=10',[])->getBody()->getContents();
        $giphy_trending = json_decode($response);
        
        return view('index', compact('giphy_trending')); 
    }
    
    public function getOneGif($id) {
    
        $response = $this->giphy->request('GET','v1/gifs/'.$id,[])->getBody()->getContents();
        $gif_detail = json_decode($response);
    
        return view('gifDetail', compact('gif_detail'));  
    } 
           
}
