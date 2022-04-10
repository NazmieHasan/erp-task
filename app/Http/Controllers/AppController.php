<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service\SalesService;

class AppController extends Controller
{
    public function getData(Request $request) {
        $saleService = new SalesService();
        return $saleService->readSale('70c5792a-9d51-4c67-b90b-96ba79c0c9b1');
    }
}
