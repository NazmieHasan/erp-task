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
        
        $response = $this->giphy->request('GET','https://api.giphy.com/v1/gifs/trending?api_key=HZ3dvMtHdWK2MRUWbyuIRcyf5ZTciRfT&limit=10&rating=g',[
        ])->getBody()->getContents();
        
        $giphy_trending = json_decode($response);
        dd($giphy_trending);
        
        dd($response);  
    }
    
    public function getOneGif($id) {
    
        $response = $this->giphy->request('GET','https://api.giphy.com/v1/gifs/'.$id,[])->getBody()->getContents();
        
        // $id = Xcjzbn0IDoF4cq7CF0 http://localhost:9000/gif-detail/Xcjzbn0IDoF4cq7CF0
        // $id = DXhmNiA8F1i4fLnMdb http://localhost:9000/gif-detail/DXhmNiA8F1i4fLnMdb
        // $id = hfKTf4RvJJRHL70Zvo http://localhost:9000/gif-detail/hfKTf4RvJJRHL70Zvo
        
        $giphy_detail = json_decode($response);
        dd($giphy_detail);
        
        dd($response);  
    } 
           
}
