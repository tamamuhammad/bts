<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pemesan' => 'required|string|max:255',
            'nomor_wa'     => 'required|string|max:20',
            'email'        => 'required|email',
            'nama_produk'  => 'required|string',
            'jumlah'       => 'required|integer|min:1',
        ]);

        $order = Order::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Pesanan berhasil dikirim!',
            'data'    => $order
        ], 201);
    }
}
