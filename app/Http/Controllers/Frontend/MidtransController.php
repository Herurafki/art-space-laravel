<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidtransController extends Controller
{
    public function handleCallback(Request $request)
    {
        // Tangani data callback dari Midtrans
        $data = $request->all();
        \Log::info('Midtrans Callback:', $data);

        // Lakukan validasi signature_key jika perlu
        return response()->json(['message' => 'Callback received'], 200);
    }
}
