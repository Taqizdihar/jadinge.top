<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentStatusController extends Controller
{
    public function show($invoice)
    {
        // Data statis sementara
        $payment = [
            'invoice' => $invoice,
            'amount' => 50000,
            'status' => 'pending',
            'expires_in' => 3600,
        ];

        return view('PaymentStatus', compact('payment'));
    }

    public function check($invoice)
    {
        return response()->json([
            'invoice' => $invoice,
            'status' => 'pending',
            'message' => 'Payment still pending.'
        ]);
    }
}
