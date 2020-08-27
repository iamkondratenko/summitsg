<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use iamk\servicespayment\models\ServicesPayment;

Route::match(['get', 'post'], '/api/check-client/', function(Request $request){

    $paymentDocumentId = json_decode($request->getContent()) -> paymentDocumentId;
    $orders = ServicesPayment::all();

    foreach ($orders as $key => $order_item) {
        if ($order_item -> payment_document_id == $paymentDocumentId){

            $json_response = '{
            "paymentDocumentId": "'.$order_item -> payment_document_id.'",
            "paymentFio": "'.$order_item -> payment_fio.'",
            "paymentPhone": "'.$order_item -> payment_phone.'",
            "paymentAddress": "'.$order_item -> payment_address.'",
            "paymentTerm": "'.$order_item -> payment_term.'",
            "paymentSum": "'.$order_item -> payment_sum.'"
            
            }';

            return response(strval($json_response));
        }
    }
});

Route::match(['get', 'post'], '/api/set-payment/', function(Request $request){

    $paymentData = json_decode($request->getContent());

    $queryState = ServicesPayment::insertGetId(array(
        'payment_document_id' => $paymentData->paymentDocumentId,
        'payment_fio' => $paymentData->paymentFio,
        'payment_phone' => $paymentData->paymentPhone,
        'payment_address'   => $paymentData->paymentAddress,
        'payment_term'   => $paymentData->paymentTerm,
        'payment_sum'   => $paymentData->paymentSum,
        'created_at'   => date("Y-m-d H:i:s"),
    ));

    return response($queryState);
});