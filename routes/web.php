<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

// Menampilkan form input
Route::get('/signature/form', function () {
    return view('signature-form');
});

// Menampilkan QR Code berdasarkan input user
Route::post('/signature/generate', function (Request $request) {
    $request->validate([
        'name'  => 'required|string',
        'nip' => 'required|string',
    ]);

    // Data tanda tangan digital (bisa di-hash untuk keamanan)
    $signatureData = hash('sha256', $request->nip . now());
    $qrCode = base64_encode(QrCode::format('png')->size(200)->generate($signatureData));

    return view('qrcode', compact('qrCode', 'request'));
});
