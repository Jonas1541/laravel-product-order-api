<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // GET /api/orders
    public function index()
    {
        return response()->json(Order::all());
    }

    // POST /api/orders
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'status' => 'nullable|in:pending,completed,cancelled'
        ]);
        // Se status não for enviado, define como 'pending'
        if (!isset($validated['status'])) {
            $validated['status'] = 'pending';
        }
        $order = Order::create($validated);
        return response()->json($order, 201);
    }

    // GET /api/orders/{id}
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return response()->json($order);
    }

    // PUT/PATCH /api/orders/{id}
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $validated = $request->validate([
            'product_id' => 'sometimes|required|exists:products,id',
            'quantity' => 'sometimes|required|integer|min:1',
            'status' => 'sometimes|required|in:pending,completed,cancelled'
        ]);
        $order->update($validated);
        return response()->json($order);
    }

    // DELETE /api/orders/{id}
    public function destroy($id)
    {
        Order::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
