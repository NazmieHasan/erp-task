<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// http://localhost:9000/api/users/1
Route::get('/users/{id}', function(\App\Models\User $id){
    return new \Illuminate\Http\JsonResponse([
        'data' => $id
    ]);
});

// BaseService.php login()
// route post https://demodb.my.erp.net/api/domain/Login

// BaseService.php logout()
// route post https://demodb.my.erp.net/api/domain/Logout

// https://demodb.my.erp.net/api/domain/query#GET+Crm_Sales_SalesOrders(70c5792a-9d51-4c67-b90b-96ba79c0c9b1)
// https://demodb.my.erp.net/api/domain/odata/Crm_Sales_SalesOrders(70c5792a-9d51-4c67-b90b-96ba79c0c9b1)

// SaleService.php readSale($id)
// route get https://demodb.my.erp.net/api/domain/odata/Crm_Sales_SalesOrders(70c5792a-9d51-4c67-b90b-96ba79c0c9b1)?$select=DocumentNo,DocumentDate
